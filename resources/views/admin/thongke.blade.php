@extends('admin.layout.indexmain')

@section('body')
<div class="dashboard">
    <h2>Thống kê</h2>
    
    <div class="stat-cards">
        <!-- Tổng số đơn hàng -->
        <div class="stat-card">
            <div class="stat-icon">
                📦
            </div>
            <div class="stat-info">
                <h3>500</h3>
                <p>Đơn hàng</p>
            </div>
        </div>

        <!-- Tổng số người dùng -->
        <div class="stat-card">
            <div class="stat-icon">
                👤
            </div>
            <div class="stat-info">
                <h3>1500</h3>
                <p>Người dùng</p>
            </div>
        </div>

        <!-- Tổng số sản phẩm -->
        <div class="stat-card">
            <div class="stat-icon">
                🛒
            </div>
            <div class="stat-info">
                <h3>300</h3>
                <p>Sản phẩm</p>
            </div>
        </div>

        <!-- Tổng doanh thu -->
        <div class="stat-card">
            <div class="stat-icon">
                💰
            </div>
            <div class="stat-info">
                <h3>5,000,000 VND</h3>
                <p>Doanh thu</p>
            </div>
        </div>
    </div>
    
    <div class="charts">
        <div class="chart">
            <h3>Biểu đồ doanh thu</h3>
            <canvas id="revenueChart"></canvas>
        </div>
        
        <div class="chart">
            <h3>Biểu đồ đơn hàng</h3>
            <canvas id="orderChart"></canvas>
        </div>
    </div>
</div>

@endsection


