/* =============================================================
   PORTFOLIO — SCRIPT
   -------------------------------------------------------------
   Author:  Yoftahe
   Purpose: Behavior for the single-page portfolio site: theme
            switching, English/Amharic translation, the dynamic
            work/portfolio grid, and the animated hero "scrubber"
            timeline used for section navigation.
   Pairs with: index.html, style.css
   ============================================================= */

/* =========================================================
   THEME (DARK / LIGHT MODE)
   Reads/writes the data-theme attribute on <html> and persists the
   user's choice to localStorage. Swaps the nav icon between a sun
   and a moon glyph to reflect the *next* available theme.
========================================================= */
const sunIcon = '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>';
const moonIcon = '<path d="M21 12.8A9 9 0 1 1 11.2 3 7 7 0 0 0 21 12.8Z"/>';

function applyThemeIcon(){
  const theme = document.documentElement.getAttribute('data-theme');
  document.getElementById('theme-icon').innerHTML = theme === 'dark' ? sunIcon : moonIcon;
}
function toggleTheme(){
  const html = document.documentElement;
  const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
  html.setAttribute('data-theme', next);
  localStorage.setItem('portfolio-theme', next);
  applyThemeIcon();
}
(function initTheme(){
  const saved = localStorage.getItem('portfolio-theme');
  const theme = saved || 'dark';
  document.documentElement.setAttribute('data-theme', theme);
  applyThemeIcon();
})();
function setLang(lang){
  document.documentElement.setAttribute('lang', lang);
  document.documentElement.setAttribute('data-lang', lang);
  document.getElementById('lang-en').classList.toggle('active', lang==='en');
  document.getElementById('lang-am').classList.toggle('active', lang==='am');
  document.querySelectorAll('[data-i18n]').forEach(el=>{
    const key = el.getAttribute('data-i18n');
    const val = i18n[lang][key];
    if(val !== undefined) el.innerHTML = val;
  });
  localStorage.setItem('portfolio-lang', lang);
  renderWork(lang);
}

/* =========================================================
   WORK / PORTFOLIO GRID
   Project data lives here as a plain array so it can later be
   swapped for data fetched from a backend (e.g. the planned
   Laravel API) with minimal changes to renderWork(). Cards are
   built on demand so they can be filtered by category and
   re-rendered in the active language.
========================================================= */
const workItems = [
  { cat:'video',  en:'Short Film — "Origins"',      am:'አጭር ፊልም — "ኦሪጅንስ"',        tagEn:'Narrative',    tagAm:'ትረካ' },
  { cat:'motion', en:'Brand Titles Package',        am:'የብራንድ ርዕስ ስብስብ',           tagEn:'Motion',       tagAm:'እንቅስቃሴ' },
  { cat:'video',  en:'Commercial Spot — 30s',       am:'የንግድ ማስታወቂያ — 30ሴ',        tagEn:'Commercial',   tagAm:'ንግድ' },
  { cat:'web',    en:'Portfolio Site (this one)',   am:'ፖርትፎሊዮ ድረ-ገጽ (ይሄው)',       tagEn:'Web',          tagAm:'ድር' },
  { cat:'motion', en:'Explainer Animation',         am:'ገላጭ አኒሜሽን',                tagEn:'Motion',       tagAm:'እንቅስቃሴ' },
  { cat:'web',    en:'EthioConnect Concept',        am:'ኢትዮኮነክት ጽንሰ-ሀሳብ',          tagEn:'Web',          tagAm:'ድር' },
];
let currentFilter = 'all';

function renderWork(lang){
  const grid = document.getElementById('work-grid');
  grid.innerHTML = '';
  workItems.filter(i => currentFilter==='all' || i.cat===currentFilter).forEach(item=>{
    const div = document.createElement('div');
    div.className = 'work-card';
    div.innerHTML = `
      <div class="work-thumb">
        <span class="work-tag">${lang==='am' ? item.tagAm : item.tagEn}</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M5 3l14 9-14 9V3z"/></svg>
      </div>
      <div class="work-meta">
        <h4>${lang==='am' ? item.am : item.en}</h4>
        <span class="mono">${item.cat.toUpperCase()}</span>
      </div>`;
    grid.appendChild(div);
  });
}
function filterWork(btn, cat){
  currentFilter = cat;
  document.querySelectorAll('.filter-row button').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
  renderWork(document.documentElement.getAttribute('data-lang'));
}

/* =========================================================
   HERO SCRUBBER, CLOCK & CHAPTER NAV
   Drives the hero's timeline visuals: fills the scrubber bar and
   moves the playhead in step with scroll position, highlights the
   chapter marker for the section currently in view, and runs a
   cosmetic running timecode clock.
========================================================= */
const sections = ['about','skills','services','work','education','contact'];
function jumpTo(btn, id){
  document.querySelectorAll('.chapters button').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById(id).scrollIntoView({behavior:'smooth'});
}
function updateScrubber(){
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const pct = docHeight > 0 ? Math.min(100, (scrollTop/docHeight)*100) : 0;
  document.getElementById('scrub-fill').style.width = pct + '%';
  document.getElementById('playhead').style.left = pct + '%';

  let activeIdx = 0;
  sections.forEach((id,i)=>{
    const el = document.getElementById(id);
    if(el && el.getBoundingClientRect().top < window.innerHeight*0.4) activeIdx = i;
  });
  document.querySelectorAll('.chapters button').forEach((b,i)=>b.classList.toggle('active', i===activeIdx));
}
window.addEventListener('scroll', updateScrubber, {passive:true});

let start = Date.now();
function tickClock(){
  const elapsed = Date.now() - start;
  const totalSec = Math.floor(elapsed/1000);
  const h = String(Math.floor(totalSec/3600)).padStart(2,'0');
  const m = String(Math.floor((totalSec%3600)/60)).padStart(2,'0');
  const s = String(totalSec%60).padStart(2,'0');
  const f = String(Math.floor((elapsed%1000)/42)).padStart(2,'0');
  document.getElementById('clock').textContent = `${h}:${m}:${s}:${f}`;
}
setInterval(tickClock, 45);

/* =========================================================
   DECORATIVE WAVEFORM
   Generates the bar-chart "audio waveform" graphic in the About
   section once on load. Purely visual, no audio is involved.
========================================================= */
(function buildWaveform(){
  const wf = document.getElementById('waveform');
  for(let i=0;i<48;i++){
    const bar = document.createElement('span');
    const h = 15 + Math.round(Math.sin(i*0.5)*25 + Math.random()*40);
    bar.style.height = Math.max(8,h) + 'px';
    wf.appendChild(bar);
  }
})();

/* =========================================================
   INITIALIZATION
   Restores the saved language preference (defaulting to English)
   and performs an initial scrubber/clock render on page load.
========================================================= */
(function initLang(){
  const saved = localStorage.getItem('portfolio-lang') || 'en';
  setLang(saved);
})();
updateScrubber();
