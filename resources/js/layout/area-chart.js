import ApexCharts from "apexcharts";

export function initializeAreaChart() {
    const chartElement = document.querySelector("#hs-curved-area-charts");
    console.log(chartElement); // Check if element exists
    if (chartElement) {
        const options = {
            chart: {
                height: 300,
                type: "area",
                toolbar: { show: false },
                zoom: { enabled: false },
            },
            series: [
                {
                    name: "Income",
                    data: [
                        18000, 51000, 60000, 38000, 88000, 50000, 40000, 52000,
                        88000, 80000, 60000, 70000,
                    ],
                },
            ],

            colors: ["#047857"], // Corresponding colors for green-700 and green-900
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "vertical",
                    shadeIntensity: 1,
                    opacityFrom: 0.6,
                    opacityTo: 0.1,
                    stops: [0, 100],
                },
            },
            dataLabels: {
                enabled: false, // Disable numbers on the lines
            },
        };
        const chart = new ApexCharts(chartElement, options);
        chart.render();
    }
}
