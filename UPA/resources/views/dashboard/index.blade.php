@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Dashboard</h4>
</div>

<div class="row g-4 mb-4">
    @php
        $cards = [
            ['title' => 'Table Order', 'amount' => '$1,300.000', 'icon' => 'bi-credit-card', 'color' => 'primary'],
            ['title' => 'Table Profit', 'amount' => '$1,400.000', 'icon' => 'bi-bar-chart', 'color' => 'success'],
            ['title' => 'Table Sales', 'amount' => '$1,400.000', 'icon' => 'bi-cart', 'color' => 'warning']
        ];
    @endphp
    @foreach ($cards as $card)
    <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3 position-relative rounded-4">
            <div class="d-flex justify-content-between">
                <div>
                    <h6 class="text-muted mb-1">{{ $card['title'] }}</h6>
                    <h4 class="mb-1">{{ $card['amount'] }}</h4>
                    <span class="text-success small">+78% From Last Month</span>
                </div>
                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi {{ $card['icon'] }} text-{{ $card['color'] }}"></i>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{--  <div class="card shadow-sm border-0 p-3 mb-4 rounded-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-semibold mb-0">Overview</h5>
        <select class="form-select w-auto rounded-3">
            <option selected>Monthly</option>
            <option>Weekly</option>
        </select>
    </div>
    <canvas id="overviewChart" height="120"></canvas>
</div>  --}}

<div class="row g-4">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0 p-3 rounded-4">
            <div class="table-responsive">
                <table class="table table-borderless align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Order Code</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Items</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1; $i <= 5; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>#09093231</td>
                            <td>09/12/2025</td>
                            <td>{{ ['Sujono', 'Kartolo', 'Baksu', 'KIRUN', 'Suki'][$i - 1] }}</td>
                            <td>$4</td>
                            <td>
                                <span class="badge bg-{{ ['success','danger','success','success','success'][$i-1] }}">
                                    {{ ['PAID','UNPAID','PAID','PAID','PAID'][$i-1] }}
                                </span>
                            </td>
                            <td>2 Items</td>
                            <td>
                                <span class="badge bg-{{ ['info','success','danger','success','success'][$i-1] }}">
                                    {{ ['PROCESS','DONE','CANCEL','DONE','DONE'][$i-1] }}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary me-1"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger me-1"><i class="bi bi-trash"></i></button>
                                <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        {{--  <div class="card shadow-sm border-0 p-3 mb-4 rounded-4">
            <h6 class="fw-bold mb-3">Top Services</h6>
            <ul class="list-group list-group-flush">
                @foreach ([['Cleaning AC', '+15.2%'], ['Services AC', '+15.2%'], ['Clean Room', '+15.2%'], ['Services TV', '+15.2%'], ['Services Radio', '-28.2%']] as $service)
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    <span>{{ $service[0] }}</span>
                    <span class="fw-semibold text-{{ str_contains($service[1], '-') ? 'danger' : 'success' }}">{{ $service[1] }}</span>
                </li>
                @endforeach
            </ul>
        </div>  --}}
{{--
        <div class="card shadow-sm border-0 p-3 rounded-4">
            <h6 class="fw-bold mb-3">Current Balance</h6>
            <canvas id="gaugeChart" height="100"></canvas>
            <p class="text-muted small mt-2 mb-0">19% - Average: $1,399</p>
        </div>  --}}
    </div>
</div>
@endsection

@section('scripts')
<script>
    const ctx = document.getElementById('overviewChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            datasets: [{
                label: 'Orders',
                data: [150,200,250,280,300,400,320,390,420,500,460,440],
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.1)',
                tension: 0.4,
                fill: true,
                pointRadius: 4,
                pointHoverRadius: 6
            }]
        },
        options: {
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    const gaugeCtx = document.getElementById('gaugeChart').getContext('2d');
    new Chart(gaugeCtx, {
        type: 'doughnut',
        data: {
            labels: ['Balance', 'Remaining'],
            datasets: [{
                data: [19, 81],
                backgroundColor: ['#198754', '#e9ecef'],
                borderWidth: 0
            }]
        },
        options: {
            cutout: '70%',
            plugins: {
                legend: { display: false }
            }
        }
    });
</script>
@endsection
