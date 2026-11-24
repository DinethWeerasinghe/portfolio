<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Dineth Weerasinghe — Associate Data Engineer building data platforms, enterprise applications, integrations and automation solutions.">
  <meta name="author" content="Dineth Weerasinghe">
  <meta name="theme-color" content="#0b0d10">
  <meta property="og:title" content="Dineth Weerasinghe | Data & Software Engineer">
  <meta property="og:description" content="Data engineering, software development, enterprise integrations and automation.">
  <meta property="og:type" content="website">
  <title>Dineth Weerasinghe | Data & Software Engineer</title>
  <link rel="icon" type="image/x-icon" href="images/icon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    :root {
      --bg: #0b0d10;
      --surface: #12161b;
      --surface-2: #171c22;
      --line: rgba(255,255,255,.09);
      --text: #f4f5f6;
      --muted: #a2aab4;
      --accent: #ffbd39;
      --accent-2: #f0a91d;
      --max: 1160px;
      --radius: 18px;
    }
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; scroll-padding-top: 88px; }
    body {
      margin: 0; background: var(--bg); color: var(--text);
      font-family: "DM Sans", sans-serif; line-height: 1.7;
      -webkit-font-smoothing: antialiased;
    }
    body.menu-open { overflow: hidden; }
    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
    button { font: inherit; }
    .container { width: min(var(--max), calc(100% - 44px)); margin: auto; }
    .section { padding: 104px 0; }
    .section-kicker {
      color: var(--accent); font-size: .76rem; font-weight: 700;
      letter-spacing: .18em; text-transform: uppercase; margin: 0 0 12px;
    }
    .section-heading { max-width: 720px; margin-bottom: 42px; }
    .section-heading h2 {
      font: 700 clamp(2rem, 4vw, 3rem)/1.12 "Space Grotesk", sans-serif;
      margin: 0 0 16px; letter-spacing: -.04em;
    }
    .section-heading p { color: var(--muted); margin: 0; max-width: 650px; }
    .accent { color: var(--accent); }
    .muted { color: var(--muted); }
    .navbar {
      position: fixed; inset: 0 0 auto; z-index: 1000;
      background: rgba(11,13,16,.82); border-bottom: 1px solid transparent;
      backdrop-filter: blur(16px); transition: .25s ease;
    }
    .navbar.scrolled { border-color: var(--line); }
    .nav-inner { min-height: 76px; display: flex; align-items: center; justify-content: space-between; }
    .brand { font: 700 1.15rem "Space Grotesk", sans-serif; letter-spacing: -.04em; }
    .brand span { color: var(--accent); }
    .nav-links { display: flex; align-items: center; gap: 27px; list-style: none; margin: 0; padding: 0; }
    .nav-links a { color: #c5cbd2; font-size: .9rem; transition: color .2s; }
    .nav-links a:hover, .nav-links a.active { color: var(--accent); }
    .nav-cta { border: 1px solid rgba(255,189,57,.55); padding: 9px 16px; border-radius: 999px; color: var(--accent)!important; }
    .menu-toggle { display: none; border: 1px solid var(--line); background: var(--surface); color: var(--text); border-radius: 10px; padding: 9px 12px; cursor: pointer; }
    .hero { min-height: 760px; display: flex; align-items: center; padding: 145px 0 85px; position: relative; overflow: hidden; }
    .hero:before {
      content: ""; position: absolute; width: 620px; height: 620px; border-radius: 50%;
      right: -130px; top: 80px; background: radial-gradient(circle, rgba(255,189,57,.12), transparent 68%);
      pointer-events: none;
    }
    .hero-grid { display: grid; grid-template-columns: 1.15fr .85fr; align-items: center; gap: 70px; position: relative; }
    .availability { display: inline-flex; align-items: center; gap: 9px; color: #d4d9df; font-size: .84rem; border: 1px solid var(--line); background: rgba(255,255,255,.025); padding: 8px 13px; border-radius: 999px; margin-bottom: 25px; }
    .availability:before { content: ""; width: 8px; height: 8px; background: #55cf8b; border-radius: 50%; box-shadow: 0 0 0 5px rgba(85,207,139,.12); }
    .hero h1 { font: 700 clamp(3rem, 6.2vw, 5.5rem)/.99 "Space Grotesk", sans-serif; letter-spacing: -.065em; margin: 0 0 20px; }
    .hero h1 span { color: var(--accent); }
    .hero-role { font: 600 clamp(1.1rem, 2vw, 1.45rem) "Space Grotesk", sans-serif; margin: 0 0 18px; color: #d8dde3; }
    .hero-copy { color: var(--muted); font-size: 1.05rem; max-width: 610px; margin: 0 0 30px; }
    .button-row { display: flex; flex-wrap: wrap; gap: 12px; }
    .btn { display: inline-flex; align-items: center; justify-content: center; gap: 10px; padding: 13px 20px; border-radius: 10px; font-weight: 700; font-size: .92rem; border: 1px solid transparent; transition: .2s ease; cursor: pointer; }
    .btn-primary { background: var(--accent); color: #17130a; }
    .btn-primary:hover { background: #ffd071; transform: translateY(-2px); }
    .btn-outline { border-color: rgba(255,255,255,.2); color: var(--text); }
    .btn-outline:hover { border-color: var(--accent); color: var(--accent); transform: translateY(-2px); }
    .hero-socials { display: flex; gap: 18px; margin-top: 34px; }
    .hero-socials a { color: #9ba4ae; font-size: 1.15rem; transition: .2s; }
    .hero-socials a:hover { color: var(--accent); transform: translateY(-2px); }
    .portrait-wrap { position: relative; width: min(100%, 420px); justify-self: center; }
    .portrait-frame { aspect-ratio: 4/5; border-radius: 190px 190px 24px 24px; overflow: hidden; border: 1px solid rgba(255,189,57,.35); background: linear-gradient(145deg,#29251d,#171b20); position: relative; }
    .portrait-frame img { width: 100%; height: 100%; object-fit: cover; object-position: center top; }
    .portrait-placeholder { display: none; height: 100%; min-height: 420px; align-items: center; justify-content: center; color: var(--accent); font-size: 5rem; }
    .portrait-note { position: absolute; bottom: 25px; left: -42px; padding: 15px 18px; border: 1px solid var(--line); border-radius: 13px; background: #171c22; box-shadow: 0 18px 50px rgba(0,0,0,.3); }
    .portrait-note strong { display: block; font: 700 1.3rem "Space Grotesk"; color: var(--accent); }
    .portrait-note small { color: var(--muted); }
    .stats { border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); background: rgba(255,255,255,.015); }
    .stats-grid { display: grid; grid-template-columns: repeat(3,1fr); }
    .stat { padding: 27px 20px; text-align: center; border-right: 1px solid var(--line); }
    .stat:last-child { border: 0; }
    .stat strong { display: block; font: 700 1.45rem "Space Grotesk"; color: var(--accent); }
    .stat span { color: var(--muted); font-size: .86rem; }
    .about-grid { display: grid; grid-template-columns: .85fr 1.15fr; gap: 65px; align-items: start; }
    .about-card { border: 1px solid var(--line); background: linear-gradient(145deg,var(--surface-2),var(--surface)); border-radius: var(--radius); padding: 30px; }
    .about-mark { width: 54px; height: 54px; border-radius: 15px; display: grid; place-items: center; background: rgba(255,189,57,.12); color: var(--accent); font-size: 1.4rem; margin-bottom: 22px; }
    .about-card h3 { font: 600 1.3rem "Space Grotesk"; margin: 0 0 10px; }
    .about-card p { color: var(--muted); margin: 0; }
    .about-content p { color: var(--muted); margin: 0 0 17px; }
    .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 13px 22px; margin-top: 27px; }
    .info-item { border-bottom: 1px solid var(--line); padding: 0 0 12px; }
    .info-item small { display: block; color: #7f8994; margin-bottom: 3px; }
    .info-item strong { font-size: .92rem; font-weight: 600; overflow-wrap: anywhere; }
    .timeline { position: relative; max-width: 900px; }
    .timeline:before { content: ""; position: absolute; left: 9px; top: 8px; bottom: 12px; width: 1px; background: rgba(255,189,57,.3); }
    .timeline-item { position: relative; padding: 0 0 35px 42px; }
    .timeline-item:before { content: ""; position: absolute; left: 3px; top: 7px; width: 13px; height: 13px; border-radius: 50%; background: var(--accent); box-shadow: 0 0 0 5px rgba(255,189,57,.12); }
    .timeline-card { background: var(--surface); border: 1px solid var(--line); border-radius: 15px; padding: 25px 27px; }
    .timeline-top { display: flex; justify-content: space-between; gap: 15px; align-items: start; flex-wrap: wrap; }
    .timeline-card h3 { font: 600 1.2rem "Space Grotesk"; margin: 0 0 5px; }
    .timeline-card .org { color: var(--accent); font-size: .92rem; }
    .timeline-date { color: var(--muted); font-size: .84rem; white-space: nowrap; }
    .timeline-card p { color: var(--muted); margin: 15px 0 0; }
    .tag-list { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 16px; }
    .tag { font-size: .76rem; color: #d4d9df; background: #20262d; border: 1px solid var(--line); padding: 5px 10px; border-radius: 999px; }
    .skills-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 17px; }
    .skill-card { background: var(--surface); border: 1px solid var(--line); border-radius: 15px; padding: 23px; transition: .25s; }
    .skill-card:hover, .project-card:hover { transform: translateY(-5px); border-color: rgba(255,189,57,.45); }
    .skill-icon { color: var(--accent); font-size: 1.35rem; margin-bottom: 15px; }
    .skill-card h3 { font: 600 1.05rem "Space Grotesk"; margin: 0 0 12px; }
    .skill-card p { color: var(--muted); font-size: .9rem; margin: 0; }
    .projects-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 20px; }
    .project-card { background: var(--surface); border: 1px solid var(--line); border-radius: var(--radius); padding: 27px; transition: .25s; display: flex; flex-direction: column; min-height: 300px; }
    .project-top { display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px; }
    .project-icon { width: 48px; height: 48px; display: grid; place-items: center; border-radius: 14px; color: var(--accent); background: rgba(255,189,57,.11); font-size: 1.2rem; }
    .project-type { color: #8f99a4; font-size: .76rem; text-transform: uppercase; letter-spacing: .1em; }
    .project-card h3 { font: 600 1.3rem "Space Grotesk"; margin: 0 0 10px; }
    .project-card p { color: var(--muted); font-size: .93rem; margin: 0; }
    .project-card .tag-list { margin-top: auto; padding-top: 22px; }
    .project-footnote { color: #7f8994; font-size: .82rem; margin-top: 25px; }
    .education-grid, .cert-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 18px; }
    .education-card, .cert-card { background: var(--surface); border: 1px solid var(--line); border-radius: 15px; padding: 24px; }
    .education-card h3, .cert-card h3 { font: 600 1.1rem "Space Grotesk"; margin: 10px 0 6px; }
    .education-card p, .cert-card p { color: var(--muted); font-size: .9rem; margin: 0; }
    .education-card .year, .cert-card .issuer { color: var(--accent); font-size: .82rem; font-weight: 600; }
    .cert-card i { color: var(--accent); font-size: 1.35rem; }
    .contact-panel { display: grid; grid-template-columns: .9fr 1.1fr; gap: 35px; padding: 36px; border: 1px solid var(--line); border-radius: 22px; background: linear-gradient(135deg,#171c22,#101317); }
    .contact-panel h3 { font: 600 1.55rem "Space Grotesk"; margin: 0 0 12px; }
    .contact-panel p { color: var(--muted); }
    .contact-link { display: flex; gap: 13px; align-items: center; margin: 18px 0; color: #dce1e6; overflow-wrap: anywhere; }
    .contact-link i { color: var(--accent); width: 20px; }
    .contact-form { display: grid; gap: 13px; }
    .contact-form input, .contact-form textarea { width: 100%; padding: 14px 15px; background: #0d1014; color: var(--text); border: 1px solid var(--line); border-radius: 10px; outline: none; font: inherit; }
    .contact-form input:focus, .contact-form textarea:focus { border-color: var(--accent); }
    .contact-form textarea { min-height: 135px; resize: vertical; }
    .form-hint { font-size: .78rem; color: #7f8994; margin: 0; }
    footer { padding: 28px 0; border-top: 1px solid var(--line); color: #7f8994; font-size: .85rem; }
    .footer-inner { display: flex; justify-content: space-between; gap: 15px; flex-wrap: wrap; }
    .back-top { position: fixed; right: 22px; bottom: 22px; width: 44px; height: 44px; display: grid; place-items: center; background: var(--accent); color: #17130a; border-radius: 12px; opacity: 0; pointer-events: none; transform: translateY(10px); transition: .2s; z-index: 900; }
    .back-top.show { opacity: 1; pointer-events: auto; transform: none; }
    .reveal { opacity: 0; transform: translateY(22px); transition: opacity .65s ease, transform .65s ease; }
    .reveal.visible { opacity: 1; transform: none; }
    @media (max-width: 900px) {
      .nav-links { gap: 15px; }
      .hero-grid { gap: 35px; }
      .skills-grid { grid-template-columns: repeat(2,1fr); }
      .about-grid { gap: 35px; }
    }
    @media (max-width: 720px) {
      .container { width: min(100% - 34px, var(--max)); }
      .section { padding: 78px 0; }
      .menu-toggle { display: block; }
      .nav-links { display: none; position: fixed; top: 76px; left: 0; right: 0; background: #101419; border-bottom: 1px solid var(--line); padding: 18px 25px 25px; flex-direction: column; align-items: stretch; gap: 0; }
      .nav-links.open { display: flex; }
      .nav-links li a { display: block; padding: 12px 0; }
      .nav-cta { display: inline-block!important; text-align: center; margin-top: 8px; }
      .hero { min-height: auto; padding: 125px 0 65px; }
      .hero-grid { grid-template-columns: 1fr; }
      .hero-content { order: 2; }
      .portrait-wrap { order: 1; width: min(68%, 300px); }
      .portrait-frame { border-radius: 150px 150px 20px 20px; }
      .portrait-note { left: -30px; bottom: 14px; padding: 10px 13px; }
      .hero h1 { font-size: clamp(2.8rem, 14vw, 4.4rem); }
      .stats-grid { grid-template-columns: 1fr; }
      .stat { border-right: 0; border-bottom: 1px solid var(--line); }
      .stat:last-child { border-bottom: 0; }
      .about-grid, .contact-panel { grid-template-columns: 1fr; }
      .skills-grid, .projects-grid, .education-grid, .cert-grid { grid-template-columns: 1fr; }
      .contact-panel { padding: 24px; }
      .info-grid { grid-template-columns: 1fr; }
    }
    @media (prefers-reduced-motion: reduce) {
      html { scroll-behavior: auto; }
      *, *:before, *:after { transition-duration: .01ms!important; animation-duration: .01ms!important; }
      .reveal { opacity: 1; transform: none; }
    }
  </style>
</head>
<body>
  <header class="navbar" id="navbar">
    <div class="container nav-inner">
      <a class="brand" href="#home" aria-label="Dineth Weerasinghe home">DINETH<span>.</span></a>
      <button class="menu-toggle" id="menuToggle" aria-label="Open navigation" aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
      <ul class="nav-links" id="navLinks">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#certifications">Certifications</a></li>
        <li><a class="nav-cta" href="#contact">Let's talk <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
      </ul>
    </div>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="container hero-grid">
        <div class="hero-content reveal">
          <!-- <div class="availability">Associate Data Engineer · Sri Lanka</div> -->
          <h1>Hi, I'm<br><span>Dineth</span><br>Weerasinghe.</h1>
          <p class="hero-role">Data Engineer <span class="accent">/</span> Software Engineer</p>
          <p class="hero-copy">I build data-driven solutions, enterprise applications and intelligent automation that help turn complex business requirements into practical technology.</p>
          <div class="button-row">
            <a class="btn btn-primary" href="#projects">Explore my work <i class="fa-solid fa-arrow-right"></i></a>
            <a class="btn btn-outline" href="dineth_weerasinghe_resume.pdf" download>Download CV <i class="fa-solid fa-download"></i></a>
          </div>
          <div class="hero-socials" aria-label="Social links">
            <a href="https://www.linkedin.com/in/dineth-weerasinghe/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://github.com/DinethWeerasinghe" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
            <a href="mailto:dinethweerasinghe20@gmail.com" aria-label="Email"><i class="fa-regular fa-envelope"></i></a>
          </div>
        </div>
        <div class="portrait-wrap reveal">
          <div class="portrait-frame">
            <img src="images/dineth2.png" alt="Portrait of Dineth Weerasinghe" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
            <div class="portrait-placeholder"><i class="fa-solid fa-user"></i></div>
          </div>
          <div class="portrait-note"><strong>Data + Engineering</strong><small>Turning ideas into solutions</small></div>
        </div>
      </div>
    </section>

    <section class="stats">
      <div class="container stats-grid">
        <div class="stat"><strong>Enterprise</strong><span>Project experience</span></div>
        <div class="stat"><strong>End-to-end</strong><span>Development mindset</span></div>
        <div class="stat"><strong>Continuous</strong><span>Learning & improvement</span></div>
      </div>
    </section>

    <section class="section" id="about">
      <div class="container about-grid">
        <div class="about-card reveal">
          <div class="about-mark"><i class="fa-solid fa-code"></i></div>
          <h3>Engineering with purpose.</h3>
          <p>I enjoy connecting software, data and business processes to build reliable solutions that make a measurable difference.</p>
        </div>
        <div class="about-content reveal">
          <div class="section-heading">
            <p class="section-kicker">A little about me</p>
            <h2>Building useful technology, one solution at a time.</h2>
          </div>
          <p>I'm a Data and Software Engineer with a B.Sc. in Business Information Systems (Special) from the University of Sri Jayewardenepura. I currently work as an Associate Data Engineer, contributing to enterprise data solutions, application development, automation and system integrations.</p>
          <p>My work spans data platforms, backend and frontend development, API integrations, workflow automation and deployment support. I enjoy understanding challenging requirements, exploring new technologies and collaborating with teams to deliver practical, maintainable solutions.</p>
          <div class="info-grid">
            <div class="info-item"><small>Current role</small><strong>Associate Data Engineer</strong></div>
            <div class="info-item"><small>Education</small><strong>B.Sc. Business Information Systems</strong></div>
            <div class="info-item"><small>Location</small><strong>Kandy, Sri Lanka</strong></div>
            <div class="info-item"><small>Email</small><strong><a href="mailto:dinethweerasinghe20@gmail.com">dinethweerasinghe20@gmail.com</a></strong></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="experience" style="background:#0e1115">
      <div class="container">
        <div class="section-heading reveal">
          <p class="section-kicker">Career journey</p>
          <h2>Professional experience</h2>
          <p>Working across data engineering, enterprise software, automation and integration initiatives.</p>
        </div>
        <div class="timeline">
          <article class="timeline-item reveal">
            <div class="timeline-card">
              <div class="timeline-top">
                <div><h3>Associate Data Engineer</h3><div class="org">Altria Consulting · Data Engineering & Analytics</div></div>
                <span class="timeline-date">Current role</span>
              </div>
              <p>Contribute to the design, development and delivery of enterprise data and software solutions. Work across application development, data integration, automation, testing, deployment and production support.</p>
              <div class="tag-list"><span class="tag">Data Engineering</span><span class="tag">Software Development</span><span class="tag">Automation</span><span class="tag">API Integration</span><span class="tag">UAT & Deployment</span></div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section" id="skills">
      <div class="container">
        <div class="section-heading reveal">
          <p class="section-kicker">What I work with</p>
          <h2>Technical skills</h2>
          <p>A practical toolkit across data engineering, software development, databases and enterprise integration.</p>
        </div>
        <div class="skills-grid">
          <article class="skill-card reveal"><div class="skill-icon"><i class="fa-solid fa-database"></i></div><h3>Data Engineering</h3><p>Snowflake, Databricks, SQL, data pipelines, data warehousing and ETL/ELT concepts.</p></article>
          <article class="skill-card reveal"><div class="skill-icon"><i class="fa-solid fa-code"></i></div><h3>Programming</h3><p>Python, JavaScript, Java, C#, SQL and PHP.</p></article>
          <article class="skill-card reveal"><div class="skill-icon"><i class="fa-solid fa-layer-group"></i></div><h3>Frontend Development</h3><p>React, Angular, HTML5, CSS3, Bootstrap and responsive UI development.</p></article>
          <article class="skill-card reveal"><div class="skill-icon"><i class="fa-solid fa-server"></i></div><h3>Backend Development</h3><p>Node.js, Express.js, .NET, REST APIs and application architecture.</p></article>
          <article class="skill-card reveal"><div class="skill-icon"><i class="fa-solid fa-plug"></i></div><h3>Integration & Automation</h3><p>REST, SOAP, Boomi, n8n, Playwright and process automation.</p></article>
          <article class="skill-card reveal"><div class="skill-icon"><i class="fa-solid fa-cloud"></i></div><h3>Platforms & Tools</h3><p>Azure, Huawei Cloud, PostgreSQL, MySQL, Git, GitLab and Linux.</p></article>
        </div>
      </div>
    </section>

    <section class="section" id="projects" style="background:#0e1115">
      <div class="container">
        <div class="section-heading reveal">
          <p class="section-kicker">Selected work</p>
          <h2>Featured projects</h2>
          <p>A selection of enterprise and personal projects demonstrating my experience across data, software and automation. Project details are intentionally high-level where work is confidential.</p>
        </div>
        <div class="projects-grid">
          <article class="project-card reveal">
            <div class="project-top"><div class="project-icon"><i class="fa-solid fa-diagram-project"></i></div><span class="project-type">Enterprise platform</span></div>
            <h3>Metadata Management</h3>
            <p>A metadata management platform supporting requester, approval, administration and support workflows, with role-based access and enterprise data integrations.</p>
            <div class="tag-list"><span class="tag">React</span><span class="tag">Node.js</span><span class="tag">Snowflake</span><span class="tag">Azure</span><span class="tag">JWT / RBAC</span></div>
          </article>
          <article class="project-card reveal">
            <div class="project-top"><div class="project-icon"><i class="fa-solid fa-robot"></i></div><span class="project-type">Process automation</span></div>
            <h3>RPA Automation</h3>
            <p>Browser automation solution for validation workflows across multiple motor and finance portals, helping reduce repetitive manual processing.</p>
            <div class="tag-list"><span class="tag">Python</span><span class="tag">Playwright</span><span class="tag">RPA</span><span class="tag">Process Automation</span></div>
          </article>
          <article class="project-card reveal">
            <div class="project-top"><div class="project-icon"><i class="fa-solid fa-mobile-screen-button"></i></div><span class="project-type">Telecommunications</span></div>
            <h3>Number Recycling Automation</h3>
            <p>Automated number recycling workflow integrating data services and telecom platform interfaces to support efficient processing and validation.</p>
            <div class="tag-list"><span class="tag">React</span><span class="tag">Node.js</span><span class="tag">Snowflake REST API</span><span class="tag">SOAP</span></div>
          </article>
          <article class="project-card reveal">
            <div class="project-top"><div class="project-icon"><i class="fa-solid fa-shield-halved"></i></div><span class="project-type">Research infrastructure</span></div>
            <h3>Trusted Research Environment</h3>
            <p>Secure research environment workflow involving identity management, dataset access approvals and provisioning of integrated research tools.</p>
            <div class="tag-list"><span class="tag">Keycloak</span><span class="tag">ClickHouse</span><span class="tag">n8n</span><span class="tag">Guacamole</span><span class="tag">JupyterHub</span></div>
          </article>
          <article class="project-card reveal">
            <div class="project-top"><div class="project-icon"><i class="fa-solid fa-heart-pulse"></i></div><span class="project-type">Health technology</span></div>
            <h3>National Digital Health – NDD</h3>
            <p>Healthcare KPI and workflow solutions bringing together health data standards and metadata to support consistent indicator management.</p>
            <div class="tag-list"><span class="tag">Next.js</span><span class="tag">Node.js</span><span class="tag">PostgreSQL</span><span class="tag">FHIR R4</span><span class="tag">DHIS2</span></div>
          </article>
          <article class="project-card reveal">
            <div class="project-top"><div class="project-icon"><i class="fa-solid fa-graduation-cap"></i></div><span class="project-type">Personal project</span></div>
            <h3>GPA Calculator</h3>
            <p>A web-based GPA calculation tool created to help students calculate and review academic results.</p>
            <div class="tag-list"><span class="tag">Web Development</span><span class="tag">JavaScript</span><span class="tag">HTML</span><span class="tag">CSS</span></div>
            <div style="padding-top:16px"><a class="accent" href="http://gpacalculator.great-site.net/" target="_blank" rel="noopener noreferrer">Visit project <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
          </article>
        </div>
        <p class="project-footnote">Note: Enterprise project descriptions are summaries. Public screenshots, source code and links should only be added where disclosure is approved.</p>
      </div>
    </section>

    <section class="section" id="education">
      <div class="container">
        <div class="section-heading reveal">
          <p class="section-kicker">Academic background</p>
          <h2>Education</h2>
        </div>
        <div class="education-grid">
          <article class="education-card reveal"><span class="year">2021 – 2025</span><h3>B.Sc. Business Information Systems (Special)</h3><p>University of Sri Jayewardenepura<br>Faculty of Management Studies and Commerce · Department of Information Technology</p></article>
          <article class="education-card reveal"><span class="year">2017 – 2019</span><h3>G.C.E. Advanced Level</h3><p>Dharmaraja College, Kandy<br>Commerce stream · Kandy District Rank: 42<br>Accounting (A), Business Studies (A), ICT (A)</p></article>
          <article class="education-card reveal"><span class="year">2015 – 2016</span><h3>G.C.E. Ordinary Level</h3><p>Sumangala College, Kandy<br>Seven A passes and two B passes.</p></article>
        </div>
      </div>
    </section>

    <section class="section" id="certifications" style="background:#0e1115">
      <div class="container">
        <div class="section-heading reveal">
          <p class="section-kicker">Continuous learning</p>
          <h2>Certifications & achievements</h2>
          <p>Professional learning and achievements across databases, integration, software development and cloud technologies.</p>
        </div>
        <div class="cert-grid">
          <article class="cert-card reveal"><i class="fa-solid fa-certificate"></i><h3>Huawei HCCDA – GaussDB</h3><p class="issuer">Huawei</p><p>Certification in Huawei GaussDB database technologies.</p></article>
          <article class="cert-card reveal"><i class="fa-solid fa-certificate"></i><h3>Boomi Associate Integration</h3><p class="issuer">Boomi</p><p>Integration development and platform fundamentals.</p></article>
          <article class="cert-card reveal"><i class="fa-solid fa-certificate"></i><h3>Boomi Professional Integration</h3><p class="issuer">Boomi</p><p>Professional-level integration development learning and certification.</p></article>
          <article class="cert-card reveal"><i class="fa-solid fa-award"></i><h3>Huawei ICT Competition – Asia Pacific</h3><p class="issuer">Cloud Track · Top 10</p><p>Recognised among the Top 10 in the Asia Pacific Cloud Track competition.</p></article>
          <article class="cert-card reveal"><i class="fa-solid fa-certificate"></i><h3>.NET Full Stack Foundation</h3><p class="issuer">Coursera</p><p>ASP.NET, C#, object-oriented programming and application development.</p></article>
          <article class="cert-card reveal"><i class="fa-solid fa-certificate"></i><h3>Career Essentials in Software Development</h3><p class="issuer">Microsoft & LinkedIn</p><p>Software development concepts and professional skills.</p></article>
          <article class="cert-card reveal"><i class="fa-solid fa-certificate"></i><h3>Python for Beginners</h3><p class="issuer">University of Moratuwa</p><p>Programming fundamentals and Python development.</p></article>
          <article class="cert-card reveal"><i class="fa-solid fa-certificate"></i><h3>APNIC Cybersecurity Fundamentals</h3><p class="issuer">APNIC</p><p>Foundational cybersecurity concepts and practices.</p></article>
        </div>
      </div>
    </section>

    <section class="section" id="contact">
      <div class="container">
        <div class="section-heading reveal">
          <p class="section-kicker">Get in touch</p>
          <h2>Let's build something meaningful.</h2>
          <p>Have a project, opportunity or idea to discuss? Feel free to reach out.</p>
        </div>
        <div class="contact-panel reveal">
          <div>
            <h3>Contact information</h3>
            <p>I'm open to professional conversations, collaboration and opportunities to solve interesting technology challenges.</p>
            <a class="contact-link" href="mailto:dinethweerasinghe20@gmail.com"><i class="fa-regular fa-envelope"></i> dinethweerasinghe20@gmail.com</a>
            <a class="contact-link" href="https://www.linkedin.com/in/dineth-weerasinghe/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in"></i> LinkedIn profile</a>
            <a class="contact-link" href="https://github.com/DinethWeerasinghe" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i> GitHub profile</a>
          </div>
          <form class="contact-form" action="save.php" method="POST">
            <input type="text" id="name" name="name" placeholder="Your name" autocomplete="name" required>
            <input type="email" id="email" name="email" placeholder="Your email address" autocomplete="email" required>
            <input type="text" id="subject" name="subject" placeholder="Subject">
            <textarea id="message" name="message" placeholder="Tell me about your message..." required></textarea>
            <button class="btn btn-primary" type="submit">Send message <i class="fa-regular fa-paper-plane"></i></button>
            <p class="form-hint">This opens your email application with the message prepared. No message is stored on this website.</p>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container footer-inner">
      <span>© <span id="year"></span> Dineth Weerasinghe. All rights reserved.</span>
      <span>Designed with purpose <span class="accent">✦</span></span>
    </div>
  </footer>
  <a href="#home" class="back-top" id="backTop" aria-label="Back to top"><i class="fa-solid fa-arrow-up"></i></a>

  <script>
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    const backTop = document.getElementById('backTop');

    document.getElementById('year').textContent = new Date().getFullYear();

    menuToggle.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('open');
      document.body.classList.toggle('menu-open', isOpen);
      menuToggle.setAttribute('aria-expanded', String(isOpen));
      menuToggle.innerHTML = isOpen ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        document.body.classList.remove('menu-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
      });
    });

    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
      backTop.classList.toggle('show', window.scrollY > 500);
    });

    const revealObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    const sections = document.querySelectorAll('main section[id]');
    const navObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navLinks.querySelectorAll('a').forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id));
        }
      });
    }, { rootMargin: '-35% 0px -55% 0px' });
    sections.forEach(section => navObserver.observe(section));

    document.getElementById('contactForm').addEventListener('submit', event => {
      event.preventDefault();
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const subject = document.getElementById('subject').value.trim() || 'Portfolio enquiry';
      const message = document.getElementById('message').value.trim();
      const body = `Hi Dineth,\n\n${message}\n\nRegards,\n${name}\n${email}`;
      window.location.href = `mailto:dinethweerasinghe20@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
  </script>
</body>
</html>
