<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Table</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
     *{
            font-family: 'Noto Sans Thai', sans-serif;
        }

</style>
@extends('layout.master')
@section('content')
<body style="background-color:#f5f5f5;">

  <div class="container mt-5">
    <!-- Table -->
    <table class="table">
      <!-- Table head -->
      <thead class="table-light">
        <tr>
          <th scope="col">รายการ</th>
          <th scope="col">วันที่อัปโหลด</th>
          <th scope="col">อ่านไฟล์</th>
        </tr>
      </thead>
      <!-- Table body -->
      <tbody>
        <tr>
          <td>Row 1, Column 1</td>
          <td>Row 1, Column 3</td>
          <td>Row 1, Column 4</td>
        </tr>
        <tr>
            <td>Row 1, Column 1</td>
            <td>Row 1, Column 3</td>
            <td>Row 1, Column 4</td>
          </tr>
          <tr>
            <td>Row 1, Column 1</td>
            <td>Row 1, Column 3</td>
            <td>Row 1, Column 4</td>
          </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>

  <!-- Link to Bootstrap JS and its dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  @endsection
</body>

</html>
