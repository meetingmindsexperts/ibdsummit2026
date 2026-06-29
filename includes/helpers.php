<?php
/**
 * helpers.php — small rendering helpers shared by every page.
 * Loaded by bootstrap.php; do not include directly.
 */

if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

/** Escape text for safe HTML output. */
function e(?string $s): string
{
    return htmlspecialchars($s ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Render the nav links list. $active matches an item's 'key'. */
function nav_links(array $items, string $active = ''): string
{
    $out = '';
    foreach ($items as $i) {
        $cls = ($i['key'] === $active) ? ' class="active"' : '';
        $out .= '<a href="' . e($i['href']) . '"' . $cls . '>' . e($i['label']) . "</a>\n      ";
    }
    return rtrim($out);
}

/** Render a single faculty card. */
function faculty_card(array $f, string $tag): string
{
    if (!empty($f['img'])) {
        $src = '/assets/faculty/' . $f['img'] . (isset($f['v']) ? '?v=' . $f['v'] : '');
        $avatar = '<img class="avatar" src="' . e($src) . '" alt="Portrait of ' . e($f['name']) . '">';
    } else {
        $avatar = '<div class="avatar">' . e($f['initials'] ?? '') . '</div>';
    }
    return '<div class="fac">' . $avatar
        . '<span class="tagrole">' . e($tag) . '</span>'
        . '<div class="name">' . e($f['name']) . '</div>'
        . '<div class="role">' . e($f['role']) . '</div></div>';
}

/** Render a grid of faculty cards. */
function faculty_grid(array $people, string $tag): string
{
    $out = '<div class="fac-grid">';
    foreach ($people as $p) {
        $out .= "\n      " . faculty_card($p, $tag);
    }
    return $out . "\n    </div>";
}

/** Render one agenda slot row. */
function agenda_slot(array $s): string
{
    $type = $s['type'] ?? '';
    $cls  = 'slot' . ($type ? ' ' . $type : '');
    $html = '<div class="' . $cls . '"><div class="time">' . e($s['time']) . '</div><div>';
    $html .= '<div class="title">' . e($s['title']) . '</div>';
    if (!empty($s['meta'])) {
        // meta is authored HTML (bold labels, separators).
        $html .= '<div class="meta">' . $s['meta'] . '</div>';
    }
    $html .= '</div>';
    if (!empty($s['chip'])) {
        $html .= '<span class="chip">' . e($s['chip']) . '</span>';
    }
    return $html . '</div>';
}

/**
 * Render a full multi-day agenda with day tabs.
 * $days is $PROGRAMME or $NURSING. Per-day 'red' => true colours the heading.
 */
function render_agenda(array $days): string
{
    $tabs = '<div class="daytabs">';
    foreach ($days as $idx => $d) {
        $n = $idx + 1;
        $tabs .= '<button class="daytab' . ($idx === 0 ? ' active' : '') . '" data-day="' . $n . '">' . e($d['tab']) . '</button>';
    }
    $tabs .= '</div>';

    $body = '';
    foreach ($days as $idx => $d) {
        $n = $idx + 1;
        $style = !empty($d['red']) ? ' style="color:var(--red)"' : '';
        $body .= '<div class="agenda-day' . ($idx === 0 ? ' show' : '') . '" data-day="' . $n . '">';
        $body .= '<h2 class="display-m"' . $style . '>' . e($d['heading']) . '</h2>';
        $body .= '<p class="day-sub">' . e($d['sub']) . '</p>';
        foreach ($d['slots'] as $s) {
            $body .= "\n      " . agenda_slot($s);
        }
        $body .= "\n    </div>\n";
    }

    return $tabs . "\n    " . $body;
}

/** Render the fact bar. $facts: list of [label, value, isRed?]. */
function fact_bar(array $facts, string $label = 'Key information'): string
{
    $out = '<section class="factbar" aria-label="' . e($label) . '"><div class="wrap">';
    foreach ($facts as $f) {
        $vcls = !empty($f[2]) ? ' is-red' : '';
        $out .= '<div class="cell"><span class="k">' . e($f[0]) . '</span><span class="v' . $vcls . '">' . e($f[1]) . '</span></div>';
    }
    return $out . '</div></section>';
}
