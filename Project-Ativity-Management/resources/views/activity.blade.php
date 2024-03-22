<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Cards Layout</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/activity.css') }}">
</head>
@extends('layout.master')
@section('content')

    <body>

        <div class="container mt-4">
            <!-- Row for the two cards -->
            <div class="row">
                <!-- First Card -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">รายละเอียดกิจกรรม</h5>
                            <!-- Your content here -->
                            <div class="info-section">
                                <p class="info-item">ข้อมูลการทำงาน</p>
                                <p class="info-item">ประเภทการทำงาน: <span class="info-value">การจัดการทรัพยากร</span></p>
                                <p class="info-item">สถานะ: <span
                                        class="info-value">การจัดการทรัพยากรที่ยั่งยืนและมีคุณภาพ</span></p>
                                <!-- more items -->
                            </div>
                            <div class="stat-section">
                                <p class="stat-item">จำนวนงานที่สำเร็จ: <span class="stat-value">250</span></p>
                                <p class="stat-item">งานที่เป็นไป / ครั้ง: <span class="stat-value">8 ชั่วโมง (40
                                        คะแนน)</span></p>
                                <!-- more statistics -->
                            </div>
                            <a href="#" class="btn btn-secondary">ดูรายละเอียด</a>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <!-- Second Card to replicate the design from the screenshot -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">จำนวนผู้สมัครเข้าร่วม</h5>
                            <div class="row">
                                <!-- First Statistic -->
                                <div class="col">
                                    <div class="statistic-counter">
                                        <div class="number">
                                            12
                                        </div>
                                        <div class="label">
                                            สมัครเสร็จ
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Statistic -->
                                <div class="col">
                                    <div class="statistic-counter">
                                        <div class="number">
                                            250
                                        </div>
                                        <div class="label">
                                            จำนวนทั้งหมด
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">กรุณาเข้าสู่ระบบ/สมัครเข้าร่วม</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Link to Bootstrap JS and its dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    </body>
@endsection

</html>
