<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Logo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* เพิ่มขนาดภาพให้มีขนาดพอดีกับ Navbar */
        .navbar-brand img {
            width: 150px;
            /* ปรับขนาดของรูปภาพตามความต้องการ */
            height: auto;
            /* รักษาอัตราส่วนของรูปภาพ */
        }

        /* ปรับลักษณะของ Navbar ให้แบ่งเป็นสองส่วน */
        .bottom-navbar {
            background-color: #ffc000;
            /* สีพื้นหลังส่วนบน */
        }

        .top-navbar {
            background-color: white;
            /* สีพื้นหลังส่วนล่าง */
        }


        /* ปรับระยะห่างระหว่างไอคอนและข้อความในเมนู Navbar */
        .nav-link i {
            margin-right: 0.25rem;
            /* ปรับระยะห่างด้านขวาของไอคอน */
        }

        /* ปรับระยะห่างของหัวข้อเมนู */
        .nav-link {
            margin-right: 2rem;
            /* ปรับระยะห่างด้านขวาของหัวข้อเมนู */
        }

        .navbar-nav .nav-link {
            font-family: 'Noto Sans Thai', sans-serif;
        }

        .navbar-nav .nav-link:hover {
            color: black;
            /* เปลี่ยนสีของตัวหนังสือเป็นสีดำเมื่อมีการชี้ */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="sticky-top">
        <nav class="navbar navbar-expand-lg top-navbar ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://img2.pic.in.th/pic/sci-logo-1-removebg-preview.png" alt="Navbar Logo">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- เพิ่มปุ่ม Login -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ ('login') }}" class="btn btn-outline-primary">ลงชื่อเข้าใช้</a>
                            <a href="{{ ('Adminlogin') }}" class="btn btn-outline-success">เจ้าหน้าที่</a>
                          </div>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bottom-navbar ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div
                        class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center w-100">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i
                                        class="fas fa-home"></i>
                                    หน้าแรก</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-newspaper"></i> ข่าวสาร</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-file-download"></i>
                                    เอกสารดาวน์โหลด</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-bell"></i>
                                    รับการแจ้งเตือนกิจกรรมใหม่</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-calendar"></i> งานกิจกรรม
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-calendar"></i>
                                            ปฏิทินกิจกรรม</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-pen-square"></i>
                                            สมัครกิจกรรม</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i>
                                            Something else here</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> โปรไฟล์
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i>
                                            แก้ไขข้อมูล</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-pen-square"></i>
                                            สมัครกิจกรรม</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-door-closed"></i>
                                            ล๊อคเอ้า</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </nav>
    <!-- ส่วนบนของ Navbar -->

    <!-- ส่วนล่างของ Navbar -->

</body>

</html>
