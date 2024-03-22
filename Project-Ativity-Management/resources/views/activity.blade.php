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
                <div class="widget-content border-tab">

                    <ul class="nav nav-tabs mt-3" id="border-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="border-home-tab" data-toggle="tab" href="#border-home"
                                role="tab" aria-controls="border-home" aria-selected="true">ข้อมูลกิจกรรม</a>
                        </li>
                    </ul><br>
                    <div class="tab-content mb-4" id="border-tabsContent">
                        <div class="tab-pane fade show active" id="border-home" role="tabpanel"
                            aria-labelledby="border-home-tab">
                            <h4 class="mb-4"><i class="bi bi-journals"></i> เกี่ยวกับกิจกรรม</h4>
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    ชื่อกิจกรรม
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">โครงการปัจฉิมนิเทศนักศึกษา ประจำปีการศึกษา 2566</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    ประเภทและลักษณะของกิจกรรม
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">
                                        กิจกรรมทั่วไป
                                    </span>
                                </div>

                                <div class="col-12 col-md-3">
                                    ลักษณะกิจกรรมการเรียนรู้แบบบูรณาการ
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span
                                        class="text-primary">เพื่อเป็นการเสริมสร้างคุณลักษณะของบัณฑิตที่พึ่งประสงค์ตามเป้าหมายของมหาวิทยาลัย
                                        คือมหาวิทยาลัยภาคตะวันออกเฉียงเหนือ
                                        เป็นมหาวิทยาลัยชั้นนำของภูมิภาคในการสร้างโอกาสสู่อนาคต</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    คุณสมบัติผู้สมัคร
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">นักศึกษามหาวิทยาลัยภาคตะวันออกเฉียงเหนือ</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    สังกัด
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary"> กิจกรรมส่วนกลาง (มหาวิทยาลัย)
                                    </span>
                                </div>

                            </div>
                            <!-- :::::::::::::::::::::::::::::::::::::::::::: -->
                            <!-- :::::::::::::::::::::::::::::::::::::::::::: -->
                            <h4 class="mb-4 mt-4"><i class="bi bi-person-circle"></i> การรับสมัคร</h4>

                            <div class="row">
                                <div class="col-12 col-md-3">
                                    จำนวนที่รับสมัคร
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">250</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    ค่าชั่วโมง/ครั้ง
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">8 ชั่วโมง (40 คะแนน)</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    เปิดรับสมัคร
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">25 กุมภาพันธ์ 2567</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    ปิดรับสมัคร
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">2 มีนาคม 2567</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    สถานะ
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="badge badge-danger">ปิดรับสมัคร</span>
                                </div>

                            </div>

                            <!-- :::::::::::::::::::::::::::::::::::::::::::: -->
                            <!-- :::::::::::::::::::::::::::::::::::::::::::: -->
                            <h4 class="mb-4 mt-4"><i class="bi bi-calendar-week"></i> กำหนดการจัดกิจกรรม</h4>


                            <div class="row">
                                <div class="col-12 col-md-3">
                                    ปีการศึกษา
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">2 / 2566</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    วันที่จัดกิจกรรม
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">
                                        2 มีนาคม 2567
                                    </span>
                                </div>

                                <div class="col-12 col-md-3">
                                    เวลา
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">08:30-16:30</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    สถานที่
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">ห้องประชุมประภากร 3 อาคาร 5 ชั้น 7
                                        มหาวิทยาลัยภาคตะวันออกเฉียงเหนือ</span>
                                </div>

                                <div class="col-12 col-md-3">
                                    โดย
                                </div>
                                <div class="col-12 col-md-9">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-caret-right"></i>
                                    <span class="text-primary">นายศรานนท์ แวงโสม</span>
                                </div>

                            </div>
                            <!-- :::::::::::::::::::::::::::::::::::::::::::: -->
                            <br />
                            <br />
                            <!-- :::::::::::::::::::::::::::::::::::::::::::: -->
                        </div>
                        <div class="tab-pane fade" id="border-profile" role="tabpanel"
                            aria-labelledby="border-profile-tab">
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
