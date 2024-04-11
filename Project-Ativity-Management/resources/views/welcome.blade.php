<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <style>
        .carousel-background {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
        }
        *{
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>
</head>
@extends('layout.master')
@section('content')
<body style="background-color:#f5f5f5;">
    <div class="container">
        <div class="row mt-4">
            <div class="container">
                <div class="carousel-background">
                    <p>ข่าวสาร ประชาสัมพันธ์</p>
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://science.bru.ac.th/wp-content/uploads/2022/10/slider-1-1-copy.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://science.bru.ac.th/wp-content/uploads/2022/10/slider-1-1-copy.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://science.bru.ac.th/wp-content/uploads/2022/10/slider-1-1-copy.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card w-100 bg-white border-1">
                            <div class="card-header">
                                สมัครเข้าร่วมกิจกรรมออนไลน์
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover mb-4">
                                    <colgroup>
                                        <col style="width: 20%;">
                                        <col style="width: 40%;">
                                        <col style="width: 40%;">
                                    </colgroup>
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center">ข้อมูล</th>
                                            <th class="text-center">ชื่อกิจกรรม</th>
                                            <th class="text-center">การรับสมัคร</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>สถานะเปิดปิด</td>
                                            <td>ชื่อกิจจัดโดย .... <br>
                                                สถานที่ ......
                                            </td>
                                            <td>รับสมัครวันที่ .... จำนวนที่รับ ......
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>กิจกรรมที่ 2</td>
                                            <td>ไม่รับสมัคร</td>
                                            <td>ไม่รับสมัคร</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <!-- เพิ่ม Card อีก 2 ใบ -->
                    <div class="col-md-6">
                        <div class="card bg-white border-1">
                            <div class="card-header">
                                นักศึกษาที่มีชั่วโมงกิจกรรมมากที่สุด ( TOP 5)
                            </div>
                            <div class="card-body">
                                Content for card 1
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-white border-1">
                            <div class="card-header">
                                ติดตามข่าวสารเพิ่มเติมที่  สโมศรคณะวิทยาศาสตร์
                            </div>
                            <div class="card-body">
                                Content for card 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
@endsection
</html>
