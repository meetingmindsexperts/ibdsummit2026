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
const ASSET_VER = '35';

/** Google Analytics 4 measurement ID. Empty string disables analytics. */
const GA_MEASUREMENT_ID = 'G-YQ2RPBB4P8';

/** Core event facts, reused across pages and SEO. */
$SITE = [
    'name'     => 'J&J IBD Summit 2026',
    'tagline'  => 'The IL-23 era for IBD: UAE Experience Exchange',
    'dates'    => '3–4 July 2026',
    'venue'    => 'Marriott Creek Hotel, Dubai, UAE',
    'email'    => 'ibdsummit@meetingmindsexperts.com',
    'phone'       => '+971 4 276 1444',
    'phone_hours' => 'Available Mon–Fri, 9am–6pm',
    'office'      => 'DSC Tower – Office 508 & 509, Dubai Studio City, Dubai',
    'pobox'       => '502464',
    'url'      => 'https://ibdsummit2026.com',
];

/** HCP / patient banner strip text. */
$HCP_STRIP     = 'For healthcare professionals only · By invitation only';
$PATIENT_STRIP = 'For patient education only · This guide does not replace medical advice';

/** Primary navigation (summit pages). 'key' drives the active state. */
$MAIN_NAV = [
    ['label' => 'About',     'href' => '/#maincontent', 'key' => 'about'],
    ['label' => 'Programme', 'href' => '/programme',     'key' => 'programme'],
    ['label' => 'Nursing',   'href' => '/nursing',       'key' => 'nursing'],
    ['label' => 'Faculty',   'href' => '/faculty',       'key' => 'faculty'],
    ['label' => 'Venue',     'href' => '/venue',         'key' => 'venue'],
    // ['label' => 'IBD Guide', 'href' => '/guide/',     'key' => 'guide'], // hidden for now — pages still live at /guide/
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
    ['name' => 'Pedro Matos-Rosa',   'role' => 'General Manager, Gulf OPCO — Janssen / J&J Gulf', 'img' => 'pedro.jpg',      'v' => '3'],
    ['name' => 'Dr. Hala Ibrahim',   'role' => 'Gastroenterology & Endoscopy, El Minya, Egypt',   'initials' => 'HI'],
    ['name' => 'Dr. Sameer Al Awadhi','role' => 'Rashid Hospital, Dubai Health',                  'img' => 'sameer.jpg',     'v' => '4'],
    ['name' => 'Dr. Mazin Rasool',   'role' => 'Mediclinic Parkview & Dubai Hills',               'img' => 'mazin.jpg',      'v' => '3'],
    ['name' => 'Dr. Khalid El Eji',  'role' => 'Hamad Medical Corporation, Doha',                 'initials' => 'KE'],
    ['name' => 'Dr. Ahmed Al Darmaki','role' => 'Royal Hospital, Oman',                           'img' => 'darmaki.jpg',    'v' => '3'],
    ['name' => 'Dr. Sara El Ouali',  'role' => 'Cleveland Clinic Abu Dhabi',                       'img' => 'sara.jpg',       'v' => '3'],
    ['name' => 'Dr. Mariam Al Khatry','role' => 'RAK Hospital',                                    'img' => 'mariam.jpg',     'v' => '3'],
    ['name' => 'Dr. Ahmed Al Sayegh', 'role' => 'Al Kindi Hospital, Bahrain',                     'img' => 'saegh.jpg',      'v' => '3'],
    ['name' => 'Dr. Mazen Taha',     'role' => 'Mediclinic Parkview & Dubai Hills',               'img' => 'mazen-taha.jpg', 'v' => '4'],
    ['name' => 'Dr. Zaher Koutoubi', 'role' => 'Hamad Medical Corporation, Doha',                 'img' => 'koutoubi.jpg',   'v' => '3'],
    ['name' => 'Dr. Khalid Osman',   'role' => 'Burjeel Hospital, Abu Dhabi',                      'img' => 'osman.jpg',      'v' => '3'],
    ['name' => 'Dr. Lisa Sharkey',   'role' => 'Affiliation to be confirmed',                     'initials' => 'LS'],
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
    ['name' => 'Dr. Mohamed Badre Alam','role' => 'Cleveland Clinic Abu Dhabi',              'img' => 'badralam.jpg', 'v' => '3'],
    ['name' => 'Dr. Shafik Sidani',    'role' => 'Cleveland Clinic Abu Dhabi',               'img' => 'sidani.jpg',   'v' => '3'],
    ['name' => 'Dr. Nabil Quraishi',   'role' => 'Consultant Gastroenterologist',            'img' => 'quraishi.jpg', 'v' => '3'],
    ['name' => 'Dr. Olena Garmish',    'role' => 'Affiliation to be confirmed',              'initials' => 'OG'],
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
        'sub'     => 'Chairs: Pedro Matos-Rosa · Sameer Al Awadhi · Khalid El Eji · Ahmed Al Darmaki',
        'slots'   => [
            ['time' => '14:00', 'title' => 'Arrival & Registration', 'type' => 'break'],
            ['time' => '14:30', 'title' => "The IBD Focus: Challenges, Opportunities & What's Next?", 'meta' => '<b>Speaker:</b> Sameer Al Awadhi &nbsp;·&nbsp; <b>Chair:</b> Pedro Matos-Rosa'],
            ['time' => '14:45', 'title' => 'The Patient Stories: Living with IBD', 'meta' => '<b>Speaker:</b> Sameer Al Awadhi'],
            ['time' => '14:55', 'title' => 'The Patient Booklet & Nursing Role in IBD Patient Care', 'meta' => '<b>Speaker:</b> Sameer Al Awadhi'],
            ['time' => '15:00', 'title' => 'Remission Pledge Wall', 'meta' => '<b>Speaker:</b> Sameer Al Awadhi', 'type' => 'feature'],
            ['time' => '15:15', 'title' => 'Break', 'type' => 'break'],
            ['time' => '15:30', 'title' => 'Following the constellations: the IL-23 story in IBD', 'meta' => '<b>Speaker:</b> Fatema Al Alawi &nbsp;·&nbsp; <b>Chair:</b> Sameer Al Awadhi'],
            ['time' => '15:50', 'title' => 'Beyond the Gut: IL-23 and the Skin', 'meta' => '<b>Speaker:</b> Alia Galadari'],
            ['time' => '16:10', 'title' => 'Completing the Journey: IL-23 and the Joints', 'meta' => '<b>Speaker:</b> Olena Garmish'],
            ['time' => '16:30', 'title' => 'Panel – Q&A', 'meta' => 'All faculty'],
            ['time' => '16:45', 'title' => 'Navigating deep space: breaking new grounds in Ulcerative Colitis', 'meta' => '<b>Speaker:</b> AbdelHakim Elganyni &nbsp;·&nbsp; <b>Chairs:</b> Khalid El Eji & Ahmed Al Darmaki'],
            ['time' => '17:05', 'title' => 'Navigating the multiverse: tailoring the trajectory in diverse UC patients', 'meta' => '<b>Speaker:</b> Hussam Saleh'],
            ['time' => '17:25', 'title' => 'Charting New Constellations: The Real-World IL-23 Era in Middle Eastern Ulcerative Colitis', 'meta' => '<b>Speaker:</b> Nabil Quraishi'],
            ['time' => '17:45', 'title' => 'Panel – Q&A', 'meta' => 'All faculty'],
        ],
    ],
    [
        'tab'     => 'Day 2 — 4 July',
        'heading' => 'Day 2 — 4 July 2026',
        'sub'     => 'Chairs: Sara El Ouali · Lisa Sharkey · Ahmed Al Sayegh · Mazen Taha · Zaher Koutoubi · Khalid Osman',
        'slots'   => [
            ['time' => '09:00', 'title' => "Shooting for the stars: reaching new heights in Crohn's disease", 'meta' => '<b>Speaker:</b> Ahmad Jazzar &nbsp;·&nbsp; <b>Chairs:</b> Sara El Ouali & Lisa Sharkey'],
            ['time' => '09:20', 'title' => 'Seizing the window of opportunity: case-based discussion CD', 'meta' => '<b>Speaker:</b> AbdelHakim ElGanyni'],
            ['time' => '09:40', 'title' => "Practical insights for IL-23 inhibitors in Crohn's Disease", 'meta' => '<b>Speaker:</b> Piyush Somani'],
            ['time' => '10:00', 'title' => 'Panel – Q&A', 'meta' => 'All faculty'],
            ['time' => '10:20', 'title' => 'Constellations of IBD care: aligning strategies towards personalized management — IL-23 and the future of IBD treatment', 'meta' => '<b>Speaker:</b> Ahmed Sultan &nbsp;·&nbsp; <b>Chairs:</b> Ahmed Al Sayegh & Mazen Taha'],
            ['time' => '10:40', 'title' => 'A giant leap for IBD? Future considerations for IL-23 inhibition in the clinic', 'meta' => '<b>Speaker:</b> Rahul Nathwani'],
            ['time' => '11:00', 'title' => 'Panel – Q&A', 'meta' => 'All faculty'],
            ['time' => '11:15', 'title' => 'Break', 'type' => 'break'],
            ['time' => '11:30', 'title' => 'Understanding the Reality of Perianal Fistulizing CD', 'meta' => '<b>Speaker:</b> Mohamed Badre Alam &nbsp;·&nbsp; <b>Chairs:</b> Zaher Koutoubi & Khalid Osman'],
            ['time' => '11:50', 'title' => 'Redefining Perianal Fistulizing CD Care', 'meta' => '<b>Speaker:</b> Sara El Ouali'],
            ['time' => '12:10', 'title' => 'Advancing Perianal Fistulizing CD Care: Surgical Excellence', 'meta' => '<b>Speaker:</b> Shafik Sidani'],
            ['time' => '12:40', 'title' => 'Perianal Fistulizing CD: The Multidisciplinary Approach', 'meta' => '<b>Speaker:</b> Sara El Ouali, Shafik Sidani, Mohamed Badre Alam'],
            ['time' => '13:40', 'title' => 'Panel – Q&A', 'meta' => 'All faculty'],
            ['time' => '13:55', 'title' => 'Closing – Summary', 'meta' => 'All faculty', 'type' => 'feature'],
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
            ['time' => '15:30', 'title' => 'Session 5 · The IBD nurse role in management', 'meta' => 'Scope of IBD nursing practice · patient education & counselling · coordination within the MDT · telephone advice & triage · advocacy & patient empowerment'],
            ['time' => '16:30', 'title' => 'Session 6 · Health maintenance in IBD', 'meta' => 'Vaccination · infection prevention & screening · cancer surveillance · bone health & osteoporosis · lifestyle interventions & smoking cessation'],
            ['time' => '17:30', 'title' => 'Q&A / open discussion', 'type' => 'feature'],
            ['time' => '17:45', 'title' => 'Reflection, wrap-up & Day 1 close', 'type' => 'feature'],
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
    'logo'  => '/assets/img/logo-jj-wordmark-white.png?v=' . ASSET_VER,
    'intro' => 'J&J IBD Summit 2026 — The IL-23 era for IBD: UAE Experience Exchange. 3–4 July 2026, Marriott Creek Hotel, Dubai, UAE.',
    // Pharmacovigilance / safety reporting (printed as raw HTML in the footer).
    'disclaimer' => 'To report <b>adverse events</b> or safety-related issues associated with Janssen products: <a href="mailto:GCC-PV2@ITS.JNJ.COM">GCC-PV2@ITS.JNJ.COM</a>.<br>For <b>Product Quality Complaints</b> and temperature excursions: <a href="mailto:JanssenQualityGCC@its.jnj.com">JanssenQualityGCC@its.jnj.com</a>.<br>Johnson &amp; Johnson Middle East FZ-LLC · DHCC Building 14 · Dubai, UAE',
    'cols'  => [
        ['Summit',    [['About', '/#maincontent'], ['Faculty', '/faculty']]],
        ['Programme', [['HCP Programme', '/programme'], ['Nursing programme', '/nursing']]],
        ['Visit',     [['Venue', '/venue'], ['Contact', '/contact']]],
    ],
    'bottom_left'  => '© 2026 Johnson & Johnson Innovative Medicine · All rights reserved · For healthcare professionals only',
    'bottom_right' => '<a href="https://www.meetingmindsgroup.com/privacy-policy" target="_blank" rel="noopener">Privacy Policy</a>',
];

/** Footer used on the patient guide pages. */
$FOOTER_GUIDE = [
    'logo'  => '/assets/img/logo-jj-wordmark-white.png?v=' . ASSET_VER,
    'intro' => 'The Gastro Journey Guide — for educational purposes only. Always talk with your healthcare professional about your condition and treatment.',
    'cols'  => [
        ['Guide', [['1 · Understand', '/guide/stage-1'], ['2 · Recognize', '/guide/stage-2'], ['3 · Aim deeper', '/guide/stage-3']]],
        ['&nbsp;', [['4 · Track', '/guide/stage-4'], ['5 · Live', '/guide/stage-5'], ['6 · Speak', '/guide/stage-6']]],
        ['Summit', [['Home', '/'], ['Programme', '/programme']]],
    ],
    'bottom_left'  => '© 2026 Johnson & Johnson Innovative Medicine. All rights reserved.',
    'bottom_right' => 'For patient education only · <a href="https://www.meetingmindsgroup.com/privacy-policy" target="_blank" rel="noopener">Privacy</a>',
];
