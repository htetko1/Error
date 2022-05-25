// $('.counter-up').counterUp({
//     delay: 10,
//     time: 2000
// });


$(".counter-up").ready(function ($) {
    $('.counter-up').counterUp({
        delay: 10,
        time: 1000
    });
});

let dateArr = ['jul 21', 'jul 20', 'jul 19', 'jul 18', 'jul 17', 'jul 16', 'jul 15', 'jul 14', 'jul 13', 'jul 12', 'jul 11', ];
let orderCountArr = [7, 8, 2, 1, 4, 5, 9, 0, 2, 5, 7];
let viewerCountArr = [13, 23, 45, 65, 78, 79, 90, 12, 43, 21, 65];

let ov = document.getElementById('ov').getContext('2d');
let ovChart = new Chart(ov, {
    type: 'line',
    data: {
        labels: dateArr,
        datasets: [{
                label: 'Order Count',
                data: orderCountArr,
                backgroundColor: [
                    '#0d6efd30',

                ],
                borderColor: [
                    '#0d6efd',

                ],
                borderWidth: 1,
                tension: 0
            },
            {
                label: 'Viewer Count',
                data: viewerCountArr,
                backgroundColor: [
                    '#19875430',

                ],
                borderColor: [
                    '#198754',

                ],
                borderWidth: 1,
                tension: 0
            }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes: [{
                display: true,
                gridLines: [{
                    display: false,
                }]
            }]
        },
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle: true
            }
        }
    }
});

let dataFromPlace = [5, 15, 4, 9, 7];
let places = ["YGN", "MDY", "NPY", "SHAN", "MGW"];

let op = document.getElementById('op').getContext('2d');
let opChart = new Chart(op, {
    type: 'doughnut',
    data: {
        labels: places,
        datasets: [{
            label: '# of Votes',
            data: dataFromPlace,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                display: false,
                beginAtZero: true
            }
        },
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle: true
            }
        }
    }
});