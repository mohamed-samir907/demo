import './bootstrap';
import 'flowbite';
import 'cal-heatmap/cal-heatmap.css';
import CalHeatmap from 'cal-heatmap';

const cal = new CalHeatmap();

cal.paint(
    {
        data: {
            source: 'https://cal-heatmap.com/fixtures/seattle-weather.csv',
            type: 'csv',
            x: 'date',
            y: d => +d['wind'],
            groupY: 'max',
        },
        date: { start: new Date('2012-01-01') },
        range: 12,
        scale: {
            color: {
                type: 'quantize',
                scheme: 'Oranges',
                domain: [0, 1, 2, 3, 4, 5, 6, 7],
            },
        },
        domain: {
            type: 'month',
        },
        subDomain: { type: 'day', radius: 2 },
        itemSelector: "#cal-heatmap",
    }
);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
