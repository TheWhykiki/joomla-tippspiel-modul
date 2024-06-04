<?php

$el = $this->el($props['html_element'] ?: 'div', [

    'class' => [
        'uk-panel',
        'uk-text-{text_style}',
        'uk-text-{text_color}',
        'uk-dropcap {@dropcap}',
        'uk-column-{column}[@{column_breakpoint}]',
        'uk-column-divider {@column} {@column_divider}',
    ],

]);

// Column
$breakpoints = ['xl', 'l', 'm', 's', ''];

if ($props['column'] && false !== $index = array_search($props['column_breakpoint'], $breakpoints)) {

    [, $columns] = explode('-', $props['column']);

    foreach (array_splice($breakpoints, $index + 1, 4) as $breakpoint) {

        if ($columns < 2) {
            break;
        }

        $el->attr('class', ['uk-column-1-' . (--$columns) . ($breakpoint ? "@{$breakpoint}" : '')]);
    }
}

?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // JSON data directly within the script
        var jsonDataTotal = <?= $props['positions']; ?>;

        var dataPointsTotal = jsonDataTotal.map(function(data) {
            return { label: "" + data.matchid, y: data.points };
        });

        var chartTotal = new CanvasJS.Chart("chartContainerTotal", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Total / Spiel"
            },
            axisY: {
                title: "Punkte",
                includeZero: false,
                interval: 1,
            },
            axisX: {
                title: "Spiel",
                includeZero: false,
            },
            data: [{
                type: "line",
                dataPoints: dataPointsTotal
            }]
        });
        chartTotal.render();
    });
</script>

<div id="chartContainerTotal" style="height: 370px; width: 100%;"></div>
