<?php
/**
 * config.php — single source of truth for site content.
 *
 * Edit text, dates, faculty, agendas and navigation HERE. The page
 * templates and partials read from these arrays, so content lives in
 * one place instead of being copy-pasted across every HTML page.
 *
 * Conventions:
 *  - Plain-text fields (names, titles) are escaped on output — write
 *    real characters (' & –), not HTML entities.
 *  - Fields documented as "HTML" are printed raw (they may contain
 *    <b>, links, ·). Only put trusted, authored markup there.
 *  - All URLs are root-relative ("/programme") because the site uses
 *    clean URLs and is served from the web root.
 */

if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

/** Bump to cache-bust CSS/JS after edits. */
const ASSET_VER = '19';

/** Core event facts, reused across pages and SEO. */
$SITE = [
    'name'     => 'J&J IBD Summit 2026',
    'tagline'  => 'Charting the Gastro Journey in IBD',
    'dates'    => '3–4 July 2026',
    'venue'    => 'Marriott Marquis Dubai Creek',
    'email'    => 'ibdsummit@its.jnj.com',
    'url'      => 'https://ibdsummit2026.com',
];

/** HCP / patient banner strip text. */
$HCP_STRIP     = 'For healthcare professionals only';
$PATIENT_STRIP = 'For patient education only · This guide does not replace medical advice';

/** Primary navigation (summit pages). 'key' drives the active state. */
$MAIN_NAV = [
    ['label' => 'About',     'href' => '/#maincontent', 'key' => 'about'],
    ['label' => 'Programme', 'href' => '/programme',     'key' => 'programme'],
    ['label' => 'Nursing',   'href' => '/nursing',       'key' => 'nursing'],
    ['label' => 'Faculty',   'href' => '/faculty',       'key' => 'faculty'],
    ['label' => 'Venue',     'href' => '/venue',         'key' => 'venue'],
    ['label' => 'IBD Guide', 'href' => '/guide/',        'key' => 'guide'],
    ['label' => 'Contact',   'href' => '/contact',       'key' => 'contact'],
];

/** Navigation for the patient guide section. */
$GUIDE_NAV = [
    ['label' => 'Home',       'href' => '/',               'key' => 'home'],
    ['label' => 'IBD Guide',  'href' => '/guide/',         'key' => 'guide'],
    ['label' => 'All stages', 'href' => '/guide/#stages',  'key' => 'stages'],
    ['label' => 'Download',   'href' => '/guide/#download', 'key' => 'download'],
];

/**
 * Faculty. Each person has: name, role, and either 'img' (filename in
 * /assets/faculty/ with optional cache 'v') or 'initials' (placeholder).
 */
$CHAIRS = [
    ['name' => 'Pedro Matos Rosa',   'role' => 'General Manager, Gulf OPCO — Janssen / J&J Gulf', 'img' => 'pedro.jpg',      'v' => '3'],
    ['name' => 'Dr. Hala Ibrahim',   'role' => 'Gastroenterology & Endoscopy, El Minya, Egypt',   'initials' => 'HI'],
    ['name' => 'Dr. Sameer Al Awadhi','role' => 'Rashid Hospital, Dubai Health',                  'img' => 'sameer.jpg',     'v' => '4'],
    ['name' => 'Dr. Mazin Rasool',   'role' => 'Mediclinic Parkview & Dubai Hills',               'img' => 'mazin.jpg',      'v' => '3'],
    ['name' => 'Dr. Khalid Alejji',  'role' => 'Hamad Medical Corporation, Doha',                 'initials' => 'KA'],
    ['name' => 'Dr. Ahmed Al Darmaki','role' => 'Royal Hospital, Oman',                           'img' => 'darmaki.jpg',    'v' => '3'],
    ['name' => 'Dr. Sara El Ouali',  'role' => 'Cleveland Clinic Abu Dhabi',                       'img' => 'sara.jpg',       'v' => '3'],
    ['name' => 'Dr. Mariam Al Khatry','role' => 'RAK Hospital',                                    'img' => 'mariam.jpg',     'v' => '3'],
    ['name' => 'Dr. Ahmed Al Saegh', 'role' => 'Al Kindi Hospital, Bahrain',                      'img' => 'saegh.jpg',      'v' => '3'],
    ['name' => 'Dr. Mazen Taha',     'role' => 'Mediclinic Parkview & Dubai Hills',               'img' => 'mazen-taha.jpg', 'v' => '4'],
    ['name' => 'Dr. Zaher Koutoubi', 'role' => 'Hamad Medical Corporation, Doha',                 'img' => 'koutoubi.jpg',   'v' => '3'],
    ['name' => 'Dr. Khalid Osman',   'role' => 'Burjeel Hospital, Abu Dhabi',                      'img' => 'osman.jpg',      'v' => '3'],
];

$SPEAKERS = [
    ['name' => 'Dr. Marwan Al Kaabi',  'role' => 'CEO, Sheikh Shakhbout Medical City',       'img' => 'marwan.jpg',   'v' => '3'],
    ['name' => 'Dr. Fatema Al Alawi',  'role' => 'Al Kindi Hospital, Bahrain',               'img' => 'fatema.jpg',   'v' => '3'],
    ['name' => 'Dr. Alia Galadari',    'role' => 'Dubai Health / Rashid Hospital; MBRU',     'img' => 'alia.jpg',     'v' => '3'],
    ['name' => 'Dr. Ahmed Zayat',      'role' => 'University Hospital Sharjah',               'img' => 'zayat.jpg',    'v' => '3'],
    ['name' => 'Dr. Abdelhakim Elganyni','role' => 'Emirates Specialty Hospital, DHCC',       'img' => 'elganyni.jpg', 'v' => '3'],
    ['name' => 'Dr. Hussam Saleh',     'role' => 'Dr. Sulaiman Al Habib Hospital, DHCC',     'img' => 'hussam.jpg',   'v' => '4'],
    ['name' => 'Dr. Rahul Nathwani',   'role' => 'Mediclinic City Hospital / MBRU',          'img' => 'rahul.jpg',    'v' => '3'],
    ['name' => 'Dr. Ahmad Jazzar',     'role' => 'Burjeel Day Surgery Center',               'img' => 'jazzar.jpg',   'v' => '3'],
    ['name' => 'Dr. Piyush Somani',    'role' => 'Prime Hospital / Emirates Specialty',      'img' => 'somani.jpg',   'v' => '3'],
    ['name' => 'Dr. Ahmed Sultan',     'role' => 'Mediclinic Airport Road Hospital',         'img' => 'sultan.jpg',   'v' => '3'],
    ['name' => 'Dr. Cecilio Azar',     'role' => 'Clemenceau Medical Center, Dubai',         'img' => 'azar.jpg',     'v' => '3'],
    ['name' => 'Dr. Mohammed Nabil',   'role' => 'Sheikh Shakhbout Medical City',            'initials' => 'MN'],
    ['name' => 'Dr. Mohamed Badr Alam','role' => 'Cleveland Clinic Abu Dhabi',               'img' => 'badralam.jpg', 'v' => '3'],
    ['name' => 'Dr. Shafik Sidani',    'role' => 'Cleveland Clinic Abu Dhabi',               'img' => 'sidani.jpg',   'v' => '3'],
    ['name' => 'Dr. Nabil Quraishi',   'role' => 'Consultant Gastroenterologist',            'img' => 'quraishi.jpg', 'v' => '3'],
];

/**
 * Scientific programme. Each day: tab label, heading, sub line, chairs,
 * and an ordered list of slots.
 * Slot fields: time, title, meta (HTML, optional), type (''|'break'|'feature'),
 * chip (optional label).
 */
$PROGRAMME = [
    [
        'tab'     => 'Day 1 — 3 July',
        'heading' => 'Day 1 — 3 July 2026',
        'sub'     => 'Chairs: Pedro Matos Rosa · Dr. Hala Ibrahim · Dr. Sameer Al Awadhi · Dr. Mazin Rasool · Dr. Khalid Alejji · Dr. Ahmed Al Darmaki',
        'slots'   => [
            ['time' => '13:30', 'title' => 'Registration', 'type' => 'break'],
            ['time' => '14:00', 'title' => 'Guests arrive at the VIP room', 'type' => 'break'],
            ['time' => '14:30', 'title' => 'Welcome remarks', 'meta' => '<b>Pedro Matos Rosa</b> · <b>Asgar Rangoonwala</b>', 'type' => 'feature'],
            ['time' => '14:50', 'title' => 'GCC IBD Patient Guide presented to H.E. Dr. Yousif Al Serkal', 'meta' => '1st IBD Nursing Programme announcement & trainer appreciation', 'type' => 'feature'],
            ['time' => '15:10', 'title' => 'Remission Pledge Wall inauguration', 'meta' => 'H.E. Dr. Yousif Al Serkal', 'type' => 'feature'],
            ['time' => '15:30', 'title' => 'The patient journey: living with IBD', 'meta' => '<b>Speaker:</b> Patient voice &nbsp;·&nbsp; <b>Chair:</b> Hala Ibrahim'],
            ['time' => '15:50', 'title' => 'Break', 'type' => 'break'],
            ['time' => '16:05', 'title' => 'Following the constellations: the IL-23 story in IBD', 'meta' => '<b>Speaker:</b> Sara El Ouali'],
            ['time' => '16:25', 'title' => 'The skin perspective', 'meta' => '<b>Speaker:</b> Alia Galadari &nbsp;·&nbsp; <b>Chairs:</b> Sameer Al Awadhi & Mazen Al Jabri'],
            ['time' => '16:45', 'title' => 'Management of patients across immunological borders', 'meta' => '<b>Speaker:</b> Ahmed Zayat'],
            ['time' => '17:05', 'title' => 'Panel Q&A', 'meta' => 'All faculty'],
            ['time' => '17:20', 'title' => 'Navigating deep space: breaking new ground in ulcerative colitis', 'meta' => '<b>Speaker:</b> Abdelhakim Elganyni'],
            ['time' => '17:40', 'title' => 'Taking STRIDEs towards mucosal healing: case-based discussion', 'meta' => '<b>Speaker:</b> Hussam Saleh &nbsp;·&nbsp; <b>Chairs:</b> Khalid Alejji & Ahmed Al Darmaki'],
            ['time' => '18:00', 'title' => 'Applying the data to real-life clinical scenarios in UC: case-based discussion', 'meta' => '<b>Speaker:</b> Rahul Nathwani'],
            ['time' => '18:20', 'title' => 'Panel Q&A', 'meta' => 'All faculty'],
        ],
    ],
    [
        'tab'     => 'Day 2 — 4 July',
        'heading' => 'Day 2 — 4 July 2026',
        'sub'     => 'Chairs: Dr. Sara El Ouali · Dr. Mariam Al Khatry · Dr. Ahmed Al Saegh · Dr. Mazen Taha · Dr. Zaher Koutoubi · Dr. Khalid Osman',
        'slots'   => [
            ['time' => '09:00', 'title' => "Shooting for the stars: reaching new heights in Crohn's disease", 'meta' => '<b>Speaker:</b> Ahmad Jazzar'],
            ['time' => '09:20', 'title' => 'Early intervention in IBD', 'meta' => '<b>Speaker:</b> Abdelhakim Elganyni &nbsp;·&nbsp; <b>Chairs:</b> Sara El Ouali & Mariam Al Khatry'],
            ['time' => '09:40', 'title' => "Practical insights for IL-23 inhibitors in Crohn's disease", 'meta' => '<b>Speaker:</b> Piyush Somani'],
            ['time' => '10:00', 'title' => 'Panel Q&A', 'meta' => 'All faculty'],
            ['time' => '10:20', 'title' => 'Break', 'type' => 'break'],
            ['time' => '10:30', 'title' => 'Constellations of IBD care: aligning strategies towards personalised management', 'meta' => '<b>Speaker:</b> Ahmed Sultan'],
            ['time' => '10:50', 'title' => 'IL-23 and the future of IBD treatment', 'meta' => '<b>Speaker:</b> Cecilio Azar &nbsp;·&nbsp; <b>Chairs:</b> Ahmed Al Saegh & Mazen Taha'],
            ['time' => '11:10', 'title' => 'A giant leap for IBD? Future considerations for IL-23 inhibition in the clinic', 'meta' => '<b>Speaker:</b> Nabil Quraishi'],
            ['time' => '11:30', 'title' => 'Panel', 'meta' => 'All faculty'],
            ['time' => '11:40', 'title' => "Improving outcomes for perianal fistulising Crohn's disease", 'meta' => '<b>Speaker:</b> Mohamed Badr Alam'],
            ['time' => '12:00', 'title' => 'Open for debate: surgery vs medication', 'meta' => '<b>With:</b> Sara Sajwani — patient voice', 'type' => 'feature', 'chip' => 'Debate'],
            ['time' => '12:45', 'title' => 'At the crossroads: navigating complex IBD decisions', 'meta' => '<b>Speaker:</b> Nabil Quraishi &nbsp;·&nbsp; <b>Chairs:</b> Zaher Koutoubi & Khalid Osman'],
            ['time' => '13:05', 'title' => 'Panel Q&A', 'meta' => 'All faculty'],
            ['time' => '13:15', 'title' => 'Close — summary', 'type' => 'feature'],
        ],
    ],
];

/** Nursing training programme — same slot structure as $PROGRAMME. */
$NURSING = [
    [
        'tab'     => 'Day 1 — Foundations',
        'heading' => 'Day 1 — Foundations of IBD Nursing',
        'sub'     => 'Friday, 3 July 2026 · 09:00 – 18:00',
        'red'     => true,
        'slots'   => [
            ['time' => '09:00', 'title' => "Session 1 · Understanding IBD: Crohn's disease & ulcerative colitis", 'meta' => 'Epidemiology & disease burden · pathophysiology of CD and UC · differences between them · clinical manifestations & complications · disease course and prognosis'],
            ['time' => '10:00', 'title' => 'Morning coffee break', 'type' => 'break'],
            ['time' => '10:15', 'title' => "Session 2 · Crohn's disease management", 'meta' => 'Classification (location & behaviour) · treatment goals & treat-to-target · medical management principles · monitoring progression · nursing considerations in CD care'],
            ['time' => '11:15', 'title' => 'Session 3 · Ulcerative colitis management', 'meta' => 'Classification & extent of UC · mild, moderate & severe disease · treatment strategies · acute severe UC: recognition & escalation · nursing considerations in UC care'],
            ['time' => '12:15', 'title' => 'Lunch break', 'type' => 'break'],
            ['time' => '13:15', 'title' => 'Session 4 · Disease activity, classifications & monitoring', 'meta' => 'Montreal classification · clinical disease activity indices · biomarkers (CRP & faecal calprotectin) · endoscopic & radiological monitoring · treat-to-target & tight disease control'],
            ['time' => '14:15', 'title' => 'Afternoon coffee break', 'type' => 'break'],
            ['time' => '14:30', 'title' => 'Session 5 · The IBD nurse role in management', 'meta' => 'Scope of IBD nursing practice · patient education & counselling · coordination within the MDT · telephone advice & triage · advocacy & patient empowerment'],
            ['time' => '15:30', 'title' => 'Session 6 · Health maintenance in IBD', 'meta' => 'Vaccination · infection prevention & screening · cancer surveillance · bone health & osteoporosis · lifestyle interventions & smoking cessation'],
            ['time' => '16:30', 'title' => 'Q&A / open discussion', 'type' => 'feature'],
            ['time' => '17:00', 'title' => 'Reflection, wrap-up & Day 1 close', 'type' => 'feature'],
        ],
    ],
    [
        'tab'     => 'Day 2 — Advanced practice',
        'heading' => 'Day 2 — Advanced IBD Nursing Practice',
        'sub'     => 'Saturday, 4 July 2026 · 09:00 – 18:00',
        'red'     => true,
        'slots'   => [
            ['time' => '09:00', 'title' => 'Session 1 · Medications in IBD: CD & UC', 'meta' => 'IBD treatment pathways · 5-ASA therapies · corticosteroids & steroid stewardship · immunomodulators & monitoring · medication safety education'],
            ['time' => '10:00', 'title' => 'Morning coffee break', 'type' => 'break'],
            ['time' => '10:15', 'title' => 'Session 2 · Biological safety and monitoring', 'meta' => 'Biologics & small molecules · pre-treatment screening · monitoring lab parameters · recognising & managing adverse events · counselling & safety education'],
            ['time' => '11:15', 'title' => 'Session 3 · Patient adherence & compliance: the IBD nurse role', 'meta' => 'Factors in non-adherence · identifying at-risk patients · motivational interviewing · shared decision-making · interventions to improve adherence'],
            ['time' => '12:15', 'title' => 'Lunch break', 'type' => 'break'],
            ['time' => '13:15', 'title' => 'Session 4 · Diet and nutrition in IBD', 'meta' => 'Nutritional assessment & screening · malnutrition & micronutrient deficiencies · enteral nutrition & dietary therapies · nutrition in active disease & remission · dietary myths'],
            ['time' => '14:15', 'title' => 'Afternoon coffee break', 'type' => 'break'],
            ['time' => '14:30', 'title' => 'Session 5 · IBD and surgery', 'meta' => 'Indications for surgery in CD & UC · common procedures · pre-operative assessment · post-operative care & complications · education & psychosocial support'],
            ['time' => '15:30', 'title' => 'Session 6 · IBD management during pregnancy', 'meta' => 'Fertility & pre-conception counselling · medication safety in pregnancy & breastfeeding · disease monitoring · MDT care & referral · the nurse\'s role'],
            ['time' => '16:30', 'title' => 'Q&A / open discussion', 'type' => 'feature'],
            ['time' => '17:00', 'title' => 'Certification ceremony, feedback & programme close', 'type' => 'feature', 'chip' => 'Certification'],
        ],
    ],
];

/** Footer used on summit pages. */
$FOOTER_MAIN = [
    'logo'  => '/assets/img/logo-corp-white.png?v=3',
    'intro' => 'J&J IBD Summit 2026 — Charting the Gastro Journey in IBD. 3–4 July 2026, Marriott Marquis Dubai Creek.',
    'cols'  => [
        ['Summit',    [['About', '/#maincontent'], ['Programme', '/programme'], ['Faculty', '/faculty']]],
        ['Visit',     [['Venue', '/venue'], ['Contact', '/contact']]],
        ['Resources', [['IBD Guide', '/guide/'], ['Register', '/register']]],
    ],
    'bottom_left'  => '© 2026 Johnson & Johnson Innovative Medicine · All rights reserved · For healthcare professionals only',
    'bottom_right' => '<a href="#">Privacy Policy</a> · <a href="#">Terms of Use</a>',
];

/** Footer used on the patient guide pages. */
$FOOTER_GUIDE = [
    'logo'  => '/assets/img/logo-corp-white.png?v=3',
    'intro' => 'The Gastro Journey Guide — for educational purposes only. Always talk with your healthcare professional about your condition and treatment.',
    'cols'  => [
        ['Guide', [['1 · Understand', '/guide/stage-1'], ['2 · Recognize', '/guide/stage-2'], ['3 · Aim deeper', '/guide/stage-3']]],
        ['&nbsp;', [['4 · Track', '/guide/stage-4'], ['5 · Live', '/guide/stage-5'], ['6 · Speak', '/guide/stage-6']]],
        ['Summit', [['Home', '/'], ['Programme', '/programme']]],
    ],
    'bottom_left'  => '© 2026 Johnson & Johnson Innovative Medicine. All rights reserved.',
    'bottom_right' => 'For patient education only · <a href="#">Privacy</a>',
];
