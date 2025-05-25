function categoryEdit(id){
    $.ajax({
          url:"./adminView/editCategoryForm.php",
          method:"post",
          data:{record:id},
          success:function(data){
              $('.allContent-section').html(data);
          }
      });
}

function updateCategory(){
    var category_id = $('#category_id').val();
    var category_name = $('#category_name').val();
    var fd = new FormData();
    fd.append('category_id', category_id);
    fd.append('category_name', category_name);

   
    $.ajax({
      url:'./controller/updateCategoryController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        if(data == "true"){
            alert('Data Update Success.');
            $('form').trigger('reset');
            showCategory();
        }        
      }
    });
}

//After click Add button
function addGaleriKami(e){
  e.preventDefault();
  var category=$('#category').val();
  var upload=$('#upload').val();
  var file=$('#file')[0].files[0];

  var fd = new FormData();
  fd.append('category', category);
  fd.append('file', file);
  fd.append('upload', upload);

  $.ajax({
      url:"./controller/addGaleriController.php",
      method:"post",
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        console.log(data);
        if(data == "true"){
          alert('Data Insert Success.');
          $('form').trigger('reset');
          showGaleriImages();
        }else if(data == "errorBatas"){
          alert("Gambar sudah lebih dari 3, tidak bisa ditambahkan lagi");
          $('form').trigger('reset');
          showGaleriImages();
        }else{
          console.log(data);
          alert("Ada masalah di upload");          
        }
      }
  });
}

//Galeri Images
function showGaleriImages(){  
  $.ajax({
      url:"./adminView/viewGaleriImages.php",
      method:"post",
      data:{record:1},
      success:function(data){
          $('.allContent-section').html(data);
      }
  });
}

// Add View Galeri view
function addViewGaleriImages(){
  $.ajax({
    url:"./adminView/addGaleriImages.php",
    method:"post",
    data:{record:1},
    success:function(data){
        $('.allContent-section').html(data);
    }
});
}

// Edit Galeri Form
function GaleriEditForm(id){
  $.ajax({
      url:"./adminView/editGaleriForm.php",
      method:"post",
      data:{record:id},
      success:function(data){
          $('.allContent-section').html(data);
      }
  });
}

//update Galeri after Submit
function updateGaleri(){
  var v_id = $('#v_id').val();
  var p_name = $('#p_name').val();
  var existingImage = $('#existingImage').val();
  var newImage = $('#newImage')[0].files[0];

  var fd = new FormData();
  fd.append('v_id', v_id);
  fd.append('p_name', p_name);
  fd.append('existingImage', existingImage);
  fd.append('newImage', newImage);
  
  $.ajax({
    url:'./controller/updateVariationController.php',
    method:'post',
    data:fd,
    processData: false,
    contentType: false,
    success: function(data){
      alert('Update Galeri Kami Success.');
      $('form').trigger('reset');
      showGaleriImages();
    }
  });
}

// Benefits
function showBenefit(){  
  $.ajax({
      url:"./adminView/viewBenefit.php",
      method:"post",
      data:{record:1},
      success:function(data){
          $('.allContent-section').html(data);
      }
  });
}

function editBenefit(id){
  $.ajax({
    url:"./adminView/editBenefitForm.php",
    method:"post",
    data:{record:id},
    success:function(data){
        $('.allContent-section').html(data);
    }
  });
}

//update Benefit after Submit
function updateBenefit(e){
  e.preventDefault();
  var benefit_id = $('#benefit_id').val();
  var judul = $('#judul').val();
  var isi = $('#isi').val();
  var existingImage = $('#existingImage').val();
  var newImage = $('#newImage')[0].files[0];

  var fd = new FormData();
  fd.append('benefit_id', benefit_id);
  fd.append('judul', judul);
  fd.append('isi', isi);
  fd.append('existingImage', existingImage);
  fd.append('newImage', newImage);
  
  $.ajax({
    url:'./controller/updateBenefitController.php',
    method:'post',
    data:fd,
    processData: false,
    contentType: false,
    success: function(data){
      if(data == "true"){
        alert('Update Benefit Success.');
        $('form').trigger('reset');
        showBenefit();
      }else{
        alert("Update tidak berhasil");
        console.log(data);
      }   
    }
  });
}


//Show Company
function showCompany(){  
  $.ajax({
      url:"./adminView/viewCompany.php",
      method:"post",
      data:{record:1},
      success:function(data){
          $('.allContent-section').html(data);
      }
  });
}

//Edit Company
function editCompany(id){
  $.ajax({
    url:"./adminView/editCompany.php",
    method:"post",
    data:{record:id},
    success:function(data){
        $('.allContent-section').html(data);
    }
  });
}

//Update Company
function updateCompany(e){
  e.preventDefault();
  tinymce.triggerSave();
  var id = $('#id').val();
  var desc = $('#desc').val();

  var fd = new FormData();
  fd.append('id', id);
  fd.append('desc', desc);
  
  $.ajax({
    url:'./controller/updateCompanyController.php',
    method:'post',
    data:fd,
    processData: false,
    contentType: false,
    success: function(data){
      if(data == "true"){
        alert('Update Company Success.');
        $('form').trigger('reset');
        location.reload();
      }else{
        alert("Update tidak berhasil"); 
      }   
    }
  });
}

//Show Visi
function showVisi(){  
  $.ajax({
      url:"./adminView/viewVisi.php",
      method:"post",
      data:{record:1},
      success:function(data){
          $('.allContent-section').html(data);
      }
  });
}

//Edit Visi
function editVisi(id){
  $.ajax({
    url:"./adminView/editVisi.php",
    method:"post",
    data:{record:id},
    success:function(data){
        $('.allContent-section').html(data);
    }
  });
}

//Update Visi
function updateVisi(e){
  e.preventDefault();
  var id = $('#id').val();
  var desc = $('#desc').val();

  var fd = new FormData();
  fd.append('id', id);
  fd.append('desc', desc);
  
  $.ajax({
    url:'./controller/updateVisiController.php',
    method:'post',
    data:fd,
    processData: false,
    contentType: false,
    success: function(data){
      if(data == "true"){
        alert('Update Visi Success.');
        $('form').trigger('reset');
        location.reload();
      }else{
        alert("Update tidak berhasil"); 
      }   
    }
  });
}



//Show Misi
function showMisi(){  
  $.ajax({
      url:"./adminView/viewMisi.php",
      method:"post",
      data:{record:1},
      success:function(data){
          $('.allContent-section').html(data);
      }
  });
}

//Edit Misi
function editMisi(id){
  $.ajax({
    url:"./adminView/editMisi.php",
    method:"post",
    data:{record:id},
    success:function(data){
        $('.allContent-section').html(data);
    }
  });
}

//Update Misi
function updateMisi(e){
  e.preventDefault();
  var id = $('#id').val();
  var desc = $('#desc').val();

  var fd = new FormData();
  fd.append('id', id);
  fd.append('desc', desc);
  
  $.ajax({
    url:'./controller/updateMisiController.php',
    method:'post',
    data:fd,
    processData: false,
    contentType: false,
    success: function(data){
      if(data == "true"){
        alert('Update Misi Success.');
        $('form').trigger('reset');
        location.reload();
      }else{
        console.log(data);
        alert("Update tidak berhasil"); 
      }   
    }
  });
}

//Testimoni
function showTestimoni(){
    $.ajax({
        url:"./adminView/viewTestimoni.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// Add Testimoni submit
function addTestimoni(e){
  e.preventDefault();
  var upload=$('#upload').val();
  var file=$('#file')[0].files[0];

  var fd = new FormData();
  fd.append('file', file);
  fd.append('upload', upload);

  $.ajax({
      url:"./controller/addTestimoniController.php",
      method:"post",
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        if(data == "true"){
          alert('Data Insert Success.');
          $('form').trigger('reset');
          location.reload();
        }else{
          alert('Data tidak berhasil disubmit');
        }
      },
  });
}

// Edit Testimoni
function editTestimoni(id){
  $.ajax({
    url:"./adminView/editTestimoni.php",
    method:"post",
    data:{record:id},
    success:function(data){
        $('.allContent-section').html(data);
    }
  });
}

//update Galeri after Submit
function updateTestimoni(e){
  e.preventDefault();
  var v_id = $('#v_id').val();
  var existingImage = $('#existingImage').val();
  var newImage = $('#newImage')[0].files[0];

  var fd = new FormData();
  fd.append('v_id', v_id);
  fd.append('existingImage', existingImage);
  fd.append('newImage', newImage);
  
  $.ajax({
    url:'./controller/updateTestimoniController.php',
    method:'post',
    data:fd,
    processData: false,
    contentType: false,
    success: function(data){
      if(data == "true"){
        alert('Update Testimoni Success.');
        $('form').trigger('reset');
        location.reload();
      }else{
        console.log(data);
        alert("Update tidak berhasl");       
      }

    }
  });
}

//Show Banner
function showBanner(){  
  $.ajax({
      url:"./adminView/viewBanner.php",
      method:"post",
      data:{record:1},
      success:function(data){
          $('.allContent-section').html(data);
      }
  });
}

function editBanner(id){
  $.ajax({
    url:"./adminView/editBanner.php",
    method:"post",
    data:{record:id},
    success:function(data){
        $('.allContent-section').html(data);
    }
  });
}

function updateBanner(e){
  e.preventDefault();

  e.preventDefault();
  var id = $('#v_id').val();
  var existingImage = $('#existingImage').val();
  var newImage = $('#newImage')[0].files[0];

  var fd = new FormData();
  fd.append('id', id);
  fd.append('existingImage', existingImage);
  fd.append('newImage', newImage);
  
  $.ajax({
    url:'./controller/updateBannerController.php',
    method:'post',
    data:fd,
    processData: false,
    contentType: false,
    success: function(data){
      if(data == "true"){
        alert('Update Banner Success.');
        $('form').trigger('reset');
        showBanner();
      }else{
        alert("Update tidak berhasil");
        console.log(data);
      }   
    }
  });
}






