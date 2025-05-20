@extends('layouts.app')

@section('content')
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card card-custom p-3">
            <h6>Table Order</h6>
            <h4>$1,300.000</h4>
            <p class="text-success small">+78% From Last Month</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom p-3">
            <h6>Table Profit</h6>
            <h4>$1,400.000</h4>
            <p class="text-success small">+78% From Last Month</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom p-3">
            <h6>Table Sales</h6>
            <h4>$1,400.000</h4>
            <p class="text-success small">+78% From Last Month</p>
        </div>
    </div>
</div>

<div class="card card-custom p-3 mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <h5>Overview</h5>
        <select class="form-select w-auto">
            <option>Monthly</option>
            <option>Weekly</option>
        </select>
    </div>
    <canvas id="overviewChart" height="100"></canvas>
</div>

<div class="row g-3">
    <div class="col-lg-8">
        <div class="card card-custom p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th><th>Order Code</th><th>Date</th><th>Customer</th>
                        <th>Total</th><th>Payment Status</th><th>Items</th><th>Order Status</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 5; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>#09093231</td>
                        <td>09/12/2025</td>
                        <td>{{ ['Sujono', 'Kartolo', 'Baksu', 'KIRUN', 'Suki'][$i - 1] }}</td>
                        <td>4</td>
                        <td><span class="badge bg-{{ ['success','danger','success','success','success'][$i-1] }}">
                            {{ ['PAID','UNPAID','PAID','PAID','PAID'][$i-1] }}
                        </span></td>
                        <td>2 Items</td>
                        <td><span class="badge bg-{{ ['info','success','danger','success','success'][$i-1] }}">
                            {{ ['PROCESS','DONE','CANCEL','DONE','DONE'][$i-1] }}
                        </span></td>
                        <td>
                            <i class="bi bi-eye me-1"></i>
                            <i class="bi bi-trash me-1"></i>
                            <i class="bi bi-pencil"></i>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card card-custom p-3 mb-3">
            <h6 class="fw-bold">Top Services</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Cleaning AC</span> <span class="text-success">+15.2%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Services AC</span> <span class="text-success">+15.2%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Clean Room</span> <span class="text-success">+15.2%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Services TV</span> <span class="text-success">+15.2%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Services Radio</span> <span class="text-danger">-28.2%</span>
                </li>
            </ul>
        </div>

        <div class="card card-custom p-3">
            <h6 class="fw-bold">Current Balance</h6>
            <canvas id="gaugeChart" height="100"></canvas>
            <p class="mt-2 small text-muted">19% - Average: $1,399</p>
        </div>
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
                borderColor: 'blue',
                tension: 0.4,
                fill: false,
            }]
        },
        options: {
            plugins: { legend: { display: false }},
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Gauge chart is custom. For production use a library like Chart.js plugins or ApexCharts
</script>
@endsection
