<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Graph') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <div class="flex justify-between items-center">
                        <p class="text-lg font-semibold">
                            {{ __('Equity Curve') }}
                        </p>

                        <x-button onclick="downloadSampleData()">
                            Download Sample Data
                        </x-button>
                    </div>

                    <div class="mt-6">
                        <canvas id="equityChart" height="100"></canvas>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1 class="font-semibold mb-1">Annual Return</h1>
                        <p class="text-2xl">{{ $metrics['annual_return'] }}</p>
                        <p class="text-sm text-gray-500">mean(pnl) x 365</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1 class="font-semibold mb-1">Sharpe Ratio</h1>
                        <p class="text-2xl">
                            {{ number_format($metrics['sharpe_ratio'], 4) }}
                        </p>
                        <p class="text-sm text-gray-500">mean(pnl) / std(pnl) x sqrt(365)</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1 class="font-semibold mb-1">Maximum Drawdown</h1>
                        <p class="text-2xl">{{ $metrics['max_drawdown'] }}</p>
                        <p class="text-sm text-gray-500">Absolute peak-to-trough drop</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1 class="font-semibold mb-1">Calmar Ratio</h1>
                        <p class="text-2xl">
                            {{ number_format($metrics['calmar_ratio'], 4) }}
                        </p>
                        <p class="text-sm text-gray-500">Annual Return / |MDD|</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        (function () {
            const labels = @json($dates ?? []);
            const equity = @json($equity ?? []);
            const ctx = document.getElementById('equityChart');
            if (ctx && labels.length && equity.length) {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Equity',
                            data: equity,
                            borderColor: 'rgba(59,130,246,1)',
                            backgroundColor: 'rgba(59,130,246,0.15)',
                            fill: true,
                            tension: 0.2,
                            pointRadius: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { display: true },
                            tooltip: { mode: 'index', intersect: false }
                        },
                        scales: {
                            x: { display: true, title: { display: true, text: 'Date' } },
                            y: { display: true, title: { display: true, text: 'Equity' } }
                        }
                    }
                });
            }
        })();

        function downloadSampleData() {
            window.open('{{ asset("sample_data.csv") }}', "_blank")
        }
    </script>
</x-app-layout>
