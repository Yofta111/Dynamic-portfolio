<!DOCTYPE html>
<!--
=================================================================
  PORTFOLIO — MARKUP
  ---------------------------------------------------------------
  Author:  Yoftahe
  Purpose: Structure for the single-page portfolio (Header, Hero,
           About, Skills, Services, Work, Education, Contact,
           Footer). Presentation lives in style.css, behavior
           (theme switch, EN/AM translation, work grid, scrubber)
           lives in script.js.
  Note:    Text nodes tagged data-i18n are populated/overwritten
           by script.js on load — edit copy in script.js's i18n
           dictionary, not here, so both languages stay in sync.
=================================================================
-->

<html lang="en" data-theme="dark" data-lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoftahe — Video Editor &amp; Motion Designer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
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
            <a href="#work" data-i18n="nav.work">Work</a>
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
    <section class="hero">
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
    <!-- ------------------------------ SKILLS ------------------------------ -->
    <section id="skills" style="background:var(--surface);">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="eyebrow" data-i18n="skills.eyebrow">02 · Skills</div>
                    <h2 class="section-title display" data-i18n="skills.title">Two tracks, synced.</h2>
                </div>
            </div>

            <div class="track">
                <div class="track-head"><span class="tag" style="background:var(--accent);"></span><span data-i18n="skills.track1">Track A — Video &amp; Motion</span></div>
                <div class="track-body">
                    <div class="clip v">Adobe Premiere Pro</div>
                    <div class="clip v">After Effects</div>
                    <div class="clip v">DaVinci Resolve</div>
                    <div class="clip v">Motion Graphics</div>
                    <div class="clip v">Color Grading</div>
                    <div class="clip v">Sound Design</div>
                    <div class="clip v">Storyboarding</div>
                </div>
            </div>
            <div class="track">
                <div class="track-head"><span class="tag" style="background:var(--accent-2);"></span><span data-i18n="skills.track2">Track B — Web &amp; Software</span></div>
                <div class="track-body">
                    <div class="clip d">HTML / CSS / JS</div>
                    <div class="clip d">Bootstrap</div>
                    <div class="clip d">Laravel</div>
                    <div class="clip d">PHP</div>
                    <div class="clip d">Java / OOP</div>
                    <div class="clip d">Git</div>
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
    <section id="work">
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
    <section id="contact" style="background:var(--surface);">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="eyebrow" data-i18n="contact.eyebrow">06 · Contact</div>
                    <h2 class="section-title display" data-i18n="contact.title">Let's cut something together.</h2>
                </div>
            </div>
            <div class="contact-grid">
                <form onsubmit="return false;">
                    <div class="field">
                        <label data-i18n="contact.name">Name</label>
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="field">
                        <label data-i18n="contact.email">Email</label>
                        <input type="email" placeholder="you@email.com">
                    </div>
                    <div class="field">
                        <label data-i18n="contact.msg">Message</label>
                        <textarea placeholder="Tell me about the project…"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" data-i18n="contact.send">▶ Send Message</button>
                </form>
                <ul class="contact-list">
                    <li><span data-i18n="contact.email.label">Email</span><a href="mailto:hello@example.com">hello@example.com</a></li>
                    <li><span data-i18n="contact.phone.label">Phone</span><a href="tel:+251900000000">+251 90 000 0000</a></li>
                    <li><span>Instagram</span><a href="#">@yoftahe</a></li>
                    <li><span>LinkedIn</span><a href="#">/in/yoftahe</a></li>
                    <li><span>Vimeo</span><a href="#">vimeo.com/yoftahe</a></li>
                </ul>
            </div>
        </div>
    </section>
</main>


<!-- =============================== FOOTER =================================== -->
<footer>
    <div class="wrap footer-row">
        <span>© 2026 YOFTAHE — <span data-i18n="footer.rights">ALL FRAMES RESERVED</span></span>
        <span data-i18n="footer.made">DESIGNED &amp; CUT BY YOFTAHE</span>
    </div>
</footer>

<script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
