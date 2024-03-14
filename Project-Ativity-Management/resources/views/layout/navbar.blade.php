<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Logo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* เพิ่มขนาดภาพให้มีขนาดพอดีกับ Navbar */
        .navbar-brand img {
            width: 150px; /* ปรับขนาดของรูปภาพตามความต้องการ */
            height: auto; /* รักษาอัตราส่วนของรูปภาพ */
        }

        /* ปรับลักษณะของ Navbar ให้แบ่งเป็นสองส่วน */
        .top-navbar {
            background-color: rgba(255,208,40,255); /* สีพื้นหลังส่วนบน */
        }

        .bottom-navbar {
            background-color: #f8f9fa; /* สีพื้นหลังส่วนล่าง */
        }
    </style>
</head>
<body>
    <!-- ส่วนบนของ Navbar -->
    <nav class="navbar navbar-expand-lg top-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://img2.pic.in.th/pic/sci-logo-1-removebg-preview.png" alt="Navbar Logo">
                คณะวิทยาศาสตร์
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- เพิ่มปุ่ม Login -->
                    <li class="nav-item">
                        <button class="btn btn-outline-success me-2" type="button">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ส่วนล่างของ Navbar -->
    <nav class="navbar navbar-expand-lg bottom-navbar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center w-100">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-newspaper"></i> ข่าวสาร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-file-download"></i> เอกสารดาวน์โหลด</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i> รับการแจ้งเตือนกิจกรรมใหม่</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-calendar"></i> งานกิจกรรม
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-calendar"></i> ปฏิทินกิจกรรม</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-pen-square"></i> สมัครกิจกรรม</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i> Something else here</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> โปรไฟล์
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> แก้ไขข้อมูล</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-pen-square"></i> สมัครกิจกรรม</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-door-closed"></i> ล๊อคเอ้า</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
