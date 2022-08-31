<?php include 'header.php' ?>

<div class="content">
<p>
 <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="position: relative;top: 50px;left:140px;">
    Post Job
  </button>
</p>
<table class="table" style="position:relative;top:40px;left:130px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Developer</td>
      <td>8LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>GOOGLe</td>
      <td>Digitial Marketing</td>
      <td>12 LPA</td>
    </tr>
  </tbody>
</table>
<div class="collapse" id="collapseExample">
  <div class="card card-body" style="position: relative;top: 50px;left:140px;">
  <form>
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="Company Name">  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">position</label>
    <input type="password" class="form-control" id="exampleInputPosition">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <input type="password" class="form-control" id="JobDesc" style="height: 150px;">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="password" class="form-control" id="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>
   </div> 
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>