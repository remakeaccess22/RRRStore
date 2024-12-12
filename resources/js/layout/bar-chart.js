import ApexCharts from "apexcharts";

// Simulated frames for each time period
const framesByPeriod = {
    Total: [
        {
            labels: [
                "Product A",
                "Product B",
                "Product C",
                "Product D",
                "Product E",
            ],
            data: [30, 25, 20, 15, 10],
        },
        {
            labels: [
                "Product A",
                "Product C",
                "Product B",
                "Product D",
                "Product E",
            ],
            data: [35, 30, 25, 15, 10],
        },
    ],
};

// Current period and frames
let currentPeriod = "Total";
let currentFrames = framesByPeriod[currentPeriod];
let currentFrameIndex = 0;
let chart;

// Initialize the chart
export function initializeMostSoldBarChartRace() {
    const chartElement = document.querySelector("#most-sold-bar-chart-race");
    if (!chartElement) return;

    const options = {
        chart: {
            type: "bar",
            height: 400,
            animations: {
                enabled: true,
                easing: "easeinout",
                speed: 1000,
            },
        },
        plotOptions: {
            bar: {
                horizontal: true,
                borderRadius: 4,
            },
        },
        series: [
            {
                name: "Units Sold",
                data: currentFrames[0].data,
            },
        ],
        xaxis: {
            categories: currentFrames[0].labels,
            title: {
                text: "Units Sold",
                style: {
                    color: "#4b5563",
                    fontSize: "14px",
                    fontWeight: 600,
                },
            },
        },
        colors: ["#064e3b"],
        dataLabels: {
            enabled: true,
            style: {
                fontSize: "12px",
                fontFamily: "Inter, ui-sans-serif",
            },
        },
    };

    chart = new ApexCharts(chartElement, options);
    chart.render();

    // Start the animation
    animateBarChartRace();
}

// Animate the bar chart race
function animateBarChartRace() {
    setInterval(() => {
        currentFrameIndex = (currentFrameIndex + 1) % currentFrames.length;

        chart.updateOptions({
            series: [
                {
                    name: "Units Sold",
                    data: currentFrames[currentFrameIndex].data,
                },
            ],
            xaxis: {
                categories: currentFrames[currentFrameIndex].labels,
            },
        });
    }, 2000);
}

// Update the chart based on the selected period
window.updateBarChart = (period) => {
    currentPeriod = period;
    currentFrames = framesByPeriod[currentPeriod];
    currentFrameIndex = 0;

    chart.updateOptions({
        series: [
            {
                name: "Units Sold",
                data: currentFrames[0].data,
            },
        ],
        xaxis: {
            categories: currentFrames[0].labels,
        },
    });
};
