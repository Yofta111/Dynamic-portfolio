<!DOCTYPE html>
<html lang="en" data-theme="dark" data-lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoftahe — Video Editor &amp; Motion Designer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>


<!-- ============================ HEADER / NAV ============================ -->
<header>
    <div class="nav">
        <div class="logo"><span class="dot"></span> YOFTAHE</div>
        <nav class="nav-links">
            <a href="#about" data-i18n="nav.about">About</a>
            <a href="#skills" data-i18n="nav.skills">Skills</a>
            <a href="#services" data-i18n="nav.services">Services</a>
            <a href="#work" data-i18n="nav.work">Portfolios</a>
            <a href="#education" data-i18n="nav.education">Education</a>
            <a href="#contact" data-i18n="nav.contact">Contact</a>
        </nav>
        <div class="nav-controls">
            <div class="lang-toggle" role="group" aria-label="Language">
                <button id="lang-en" class="active" onclick="setLang('en')">EN</button>
                <button id="lang-am" onclick="setLang('am')">አማ</button>
            </div>
            <button class="icon-btn" id="theme-btn" onclick="toggleTheme()" aria-label="Toggle theme">
                <svg id="theme-icon" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></svg>
            </button>
        </div>
    </div>
</header>


<!-- ================================ MAIN =================================== -->
<main>
    <!-- HERO -->
    <!-- ------------------------------ HERO ------------------------------ -->
    <section class="hero"  style="background:var(--surface);">
        <div class="wrap">
            <div class="hero-grid">
                <div>
                    <div class="eyebrow" data-i18n="hero.eyebrow">Video Editor &amp; Motion Designer</div>
                    <h1 class="hero-title display">
                        <span data-i18n="hero.title1">{{ $hero->title }}</span><br>
                        <span class="accent-text" data-i18n="hero.title2">{{ $hero->title2  }}</span>
                    </h1>
                    <p class="hero-role" data-i18n="hero.role">
                        {{ $hero->description ?? 'Yoftahe — video editor and motion designer...' }}
                    </p>
                    <div class="hero-cta">
                        <a href="#work" class="btn btn-primary" data-i18n="hero.cta1">▶ View Work</a>
                        <a href="#contact" class="btn btn-ghost" data-i18n="hero.cta2">Start a Project</a>
                    </div>
                </div>
                <div class="hero-frame">
                    <div class="rec"><span class="rec-dot"></span> <span data-i18n="hero.rec">REC</span></div>
                    <div class="img-holder">
                        @if(isset($hero) && $hero->image)
                            <img src="{{ asset($hero->image) }}" alt="Hero Image" style="width:100%; height:100%; object-fit:cover;">
                        @else
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><rect x="3" y="5" width="18" height="14" rx="1"/><circle cx="9" cy="10" r="2"/><path d="M21 16l-5-5-5 5-3-3-5 5"/></svg>
                            <span class="mono" style="font-size:11px;" data-i18n="hero.holder">Photo placeholder — 3:4</span>
                        @endif
                    </div>
                    <div class="code mono">01:24:07:12</div>
                </div>
            </div>

            <div class="scrubber">
                <div class="scrubber-top">
                    <span data-i18n="hero.reel">REEL_2026.PROJECT</span>
                    <span id="clock">00:00:00:00</span>
                </div>
                <div class="scrubber-track" id="scrub-track">
                    <div class="scrubber-line"></div>
                    <div class="scrubber-fill" id="scrub-fill"></div>
                    <div class="playhead" id="playhead"></div>
                </div>
                <div class="chapters">
                    <button data-target="about" onclick="jumpTo(this,'about')" data-i18n="chapters.about">01 · About</button>
                    <button data-target="skills" onclick="jumpTo(this,'skills')" data-i18n="chapters.skills">02 · Skills</button>
                    <button data-target="services" onclick="jumpTo(this,'services')" data-i18n="chapters.services">03 · Services</button>
                    <button data-target="work" onclick="jumpTo(this,'work')" data-i18n="chapters.work">04 · Work</button>
                    <button data-target="education" onclick="jumpTo(this,'education')" data-i18n="chapters.education">05 · Education</button>
                    <button data-target="contact" onclick="jumpTo(this,'contact')" data-i18n="chapters.contact">06 · Contact</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <!-- ------------------------------ ABOUT ------------------------------ -->
    <section id="about">
        <div class="sprocket-rail left"></div>
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="eyebrow" data-i18n="about.eyebrow">01 · About</div>
                    <h2 class="section-title display" data-i18n="about.title">Two crafts, one instinct for pacing.</h2>
                </div>
            </div>
            <div class="about-grid">
                <div class="about-copy">
                    <p data-i18n="about.p1">
                        <strong>Yoftahe </strong>{{ $about->description }}
                    </p>

                    <p data-i18n="about.p2">
                        {{ $about->description2 }}
                    </p>

                    <div class="stat-row">
                        <div class="stat"><b data-i18n="about.stat1n">3rd</b><span data-i18n="about.stat1s">Year · Software Eng.</span></div>
                        <div class="stat"><b data-i18n="about.stat2n">Multi-skill</b><span data-i18n="about.stat2s">Crafts · Video + Web</span></div>
                        <div class="stat"><b data-i18n="about.stat3n">EN/AMH</b><span data-i18n="about.stat3s">Bilingual-Speaker </span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sprocket-rail right"></div>
    </section>
    <!-- SKILLS -->
    <!-- ------------------------------- SKILLS ------------------------------- -->
    <section id="skills" style="background:var(--surface);">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="eyebrow" data-i18n="skills.eyebrow">02 · Skills</div>
                    <h2 class="section-title display" data-i18n="skills.title">Two tracks, synced.</h2>
                </div>
            </div>

            <!-- Track A -->
            <div class="track">
                <div class="track-head">
                    <span class="tag" style="background:var(--accent);"></span>
                    <span data-i18n="skills.track1">Track A — Video &amp; Motion</span>
                </div>
                <div class="track-body">
                    @forelse($skills->where('track', 'A') as $skill)
                        <div class="clip {{ $skill->clip_class }}">{{ $skill->name }}</div>
                    @empty
                        <p class="text-muted">No Track A skills added yet.</p>
                    @endforelse
                </div>
            </div>

            <!-- Track B -->
            <div class="track">
                <div class="track-head">
                    <span class="tag" style="background:var(--accent-2);"></span>
                    <span data-i18n="skills.track2">Track B — Web &amp; Software</span>
                </div>
                <div class="track-body">
                    @forelse($skills->where('track', 'B') as $skill)
                        <div class="clip {{ $skill->clip_class }}">{{ $skill->name }}</div>
                    @empty
                        <p class="text-muted">No Track B skills added yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <!-- ----------------------------- SERVICES ----------------------------- -->
    <section id="services">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="eyebrow" data-i18n="services.eyebrow">03 · Services</div>
                    <h2 class="section-title display" data-i18n="services.title">What I take on.</h2>
                </div>
            </div>
        </div>
        <div class="wrap" style="padding:0;">
            <div class="services-grid">
                @foreach($services as $service)
                    <div class="service-card">
                        {{-- Formats 1 as 01, 2 as 02, etc. --}}
                        <div class="service-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>

                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- WORK -->
    <!-- ------------------------------- WORK ------------------------------- -->
    <section id="work"  style="background:var(--surface);">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="eyebrow">04 · Selected Work</div>
                    <h2 class="section-title display">A reel of recent cuts.</h2>
                </div>
            </div>

            <div class="filter-row">
                <button class="active" onclick="filterWork(this,'all')">All</button>
                <button onclick="filterWork(this,'video')">Video</button>
                <button onclick="filterWork(this,'motion')">Motion</button>
                <button onclick="filterWork(this,'web')">Web</button>
            </div>

            <div class="work-grid" id="work-grid">
                @forelse($portfolios as $portfolio)
                    <div class="work-card" data-category="{{ Str::lower($portfolio->category ?? 'all') }}">
                        <div class="work-thumb" style="@if($portfolio->image) background-image: url('{{ asset($portfolio->image) }}'); background-size: cover; background-position: center; @endif">
                            <span class="work-tag">{{ $portfolio->type ?? 'Project' }}</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4">
                                <path d="M5 3l14 9-14 9V3z"/>
                            </svg>
                        </div>
                        <div class="work-meta">
                            <h4>{{ $portfolio->title }}</h4>
                            @if($portfolio->description)
                                <p class="work-desc">{{ Str::limit($portfolio->description, 80) }}</p>
                            @endif
                            <a href="{{ $portfolio->link ?? '#' }}" @if($portfolio->link) target="_blank" @endif class="btn btn-ghost work-view">View</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-4">
                        <p class="text-muted">No portfolio items found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- EDUCATION -->
    <!-- ----------------------------- EDUCATION ---------------------------- -->
    <section id="education">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="eyebrow" data-i18n="edu.eyebrow">05 · Education</div>
                    <h2 class="section-title display" data-i18n="edu.title">Timecoded path.</h2>
                </div>
            </div>
            <div class="timeline">
                <div class="tl-item">
                    <div class="tl-code mono">00:00:00:00</div>
                    <h4 data-i18n="edu.i1t">Saint Joseph School</h4>
                    <p data-i18n="edu.i1p">High school education.</p>
                </div>
                <div class="tl-item">
                    <div class="tl-code mono">00:01:00:00</div>
                    <h4 data-i18n="edu.i2t">Freshman Year — Addis Ababa, 5 Kilo</h4>
                    <p data-i18n="edu.i2p">Freshman college studies at the 5 Kilo campus in Addis Ababa.</p>
                </div>
                <div class="tl-item current">
                    <div class="tl-code mono">00:03:00:00 ▶</div>
                    <h4 data-i18n="edu.i3t">Hilcoe — Software Engineering, 3rd Year</h4>
                    <p data-i18n="edu.i3p">Currently in the 3rd year of a Software Engineering program, in progress.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <!-- ------------------------------ CONTACT ----------------------------- -->
    <section id="contact"  style="background:var(--surface);">
        <div class="wrap">
            <div class="section-head" >
                <div>
                    <div class="eyebrow" data-i18n="contact.eyebrow">06 · Contact</div>
                    <h2 class="section-title display" data-i18n="contact.title">Let's cut something together.</h2>
                </div>
            </div>

            <div class="contact-cards" >
                <!-- Contact Info card -->
                <div class="contact-card">
                    <h3 class="contact-card-title" data-i18n="contact.info.title">Contact Info</h3> <br>
                    <p class="contact-card-sub" data-i18n="contact.info.sub">Reach out directly — I usually reply within a day or two.</p>

                    <div class="info-row">
          <span class="info-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12a4 4 0 0 1-4 4H8l-4 4V6a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg>
          </span>
                        <div>
                            <h4 data-i18n="contact.phone.label">Phone Number</h4>
                            <p><a href="tel:+251900000000">+251 915771277</a></p>
                        </div>
                    </div>

                    <div class="info-row">
          <span class="info-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
          </span>
                        <div>
                            <h4 data-i18n="contact.email.label">Email Address</h4>
                            <p><a href="mailto:yoftaraya@gmail.com">yoftaraya@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="info-row">
          <span class="info-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 3L2 11.5l7 2.2M22 3L15.5 21l-6.5-7.3M22 3L9 14.7"/></svg>
          </span>
                        <div>
                            <h4 data-i18n="contact.channels">Channels</h4>
                            <p><a href="https://t.me/yoftahe" target="_blank" rel="noopener">Telegram · @yofta10</a></p>
                        </div>
                    </div>
                </div>

                <!-- Get In Touch form card -->
                <div class="contact-card">
                    <h3 class="contact-card-title" data-i18n="contact.form.title">Get In Touch</h3>
                    <p class="contact-card-sub" data-i18n="contact.form.sub">Tell me a bit about the project and I'll get back to you.</p>

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <!-- Honeypot Field (Spam Protection) -->
                        <div style="display: none !important;">
                            <input type="text" name="website" value="" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="field-row">
                            <!-- Name Field -->
                            <div class="field">
                                <input type="text" name="name" data-i18n-placeholder="contact.name" placeholder="Your Name" value="{{ old('name') }}" required>
                                @error('name')
                                <small style="color: #dc3545; display: block; margin-top: 4px;">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="field">
                                <input type="email" name="email" data-i18n-placeholder="contact.email" placeholder="Your Email" value="{{ old('email') }}" required>
                                @error('email')
                                <small style="color: #dc3545; display: block; margin-top: 4px;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Subject Field -->
                        <div class="field">
                            <input type="text" name="subject" data-i18n-placeholder="contact.subject" placeholder="Subject" value="{{ old('subject') }}">
                            @error('subject')
                            <small style="color: #dc3545; display: block; margin-top: 4px;">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Message Field -->
                        <div class="field">
                            <textarea name="message" data-i18n-placeholder="contact.msg" placeholder="Message" required>{{ old('message') }}</textarea>
                            @error('message')
                            <small style="color: #dc3545; display: block; margin-top: 4px;">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-center" data-i18n="contact.send">▶ Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- =============================== FOOTER =================================== -->
<footer>
    <div class="wrap footer-bottom">
        <p class="footer-copy">© 2026 YOFTAHE — <span data-i18n="footer.rights">ALL FRAMES RESERVED</span></p>

        <div class="footer-social">
            <a href="https://t.me/Yofta10" target="_blank" rel="noopener" aria-label="Telegram">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 3L2 11.5l7 2.2M22 3L15.5 21l-6.5-7.3M22 3L9 14.7"/></svg>
            </a>
            <a href="https://github.com/Yofta111" target="_blank" rel="noopener" aria-label="GitHub">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="7" cy="6" r="2.4"/><circle cx="17" cy="6" r="2.4"/><circle cx="12" cy="18" r="2.4"/><path d="M7 8.4V12a4 4 0 0 0 4 4M17 8.4V12a4 4 0 0 0-4 4"/></svg>
            </a>
            <a href="https://www.instagram.com/yofta111" target="_blank" rel="noopener" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="0.6" fill="currentColor" stroke="none"/></svg>
            </a>
            <a href="#" target="_blank" rel="noopener" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="8" r="2"/><path d="M8 11v9M14 20v-5a3 3 0 0 1 6 0v5M14 13v7"/></svg>
            </a>
        </div>

        <p class="footer-made" data-i18n="footer.made">DESIGNED &amp; CUT BY YOFTAHE</p>
    </div>
</footer>

<script src="{{ asset('frontend/js/script.js') }}"></script>
<!-- jQuery (Required by Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Global Toastr Configurations & Trigger -->
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    @if(session('success'))
    toastr.success("{{ session('success') }}", "Success!");
    @endif

    @if(session('error'))
    toastr.error("{{ session('error') }}", "Error!");
    @endif

    @if(session('info'))
    toastr.info("{{ session('info') }}", "Notice");
    @endif

    @if(session('warning'))
    toastr.warning("{{ session('warning') }}", "Warning!");
    @endif
</script>
</body>
</html>
