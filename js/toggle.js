const Admin = document.getElementById('Admin');
const Seller =document.getElementById('Seller');
const Login=document.getElementById('Login');
const LogOut=document.getElementById('LogOut');
const Catagory =document.getElementById('Cat');
const ProductAdd=document.getElementById('ProductAdd');



const AddCat =document.getElementById('AddCat');
const AddProduct=document.getElementById('AddProduct');
const AdminButton = document.getElementById('AddAdmin');
const LoginButton=document.getElementById('LoginButton');
const SellerButton=document.getElementById('AddSeller');




AdminButton.addEventListener('click', function() {
  if (Admin.style.display === 'none') {
    Admin.style.display = 'block';
    Seller.style.display='none';
    Catagory.style.display='none';
    ProductAdd.style.display='none';
  } else {
    Admin.style.display = 'none';
  }
});

SellerButton.addEventListener('click', function() {
    if (Seller.style.display === 'none') {
      Seller.style.display = 'block';
      Admin.style.display='none';
      Catagory.style.display='none';
      ProductAdd.style.display='none';
    } else {
      Seller.style.display = 'none';
    }
  });
  LoginButton.addEventListener('click', function() {
    if (Login.style.display === 'none') {
      Login.style.display = 'block';
      
    } else {
      Login.style.display = 'none';
    }
  });

  

  AddCat.addEventListener('click', function() {
    if (Catagory.style.display === 'none') {
      Catagory.style.display = 'block';
      Seller.style.display = 'none';
      Admin.style.display='none';
      ProductAdd.style.display = 'none';
      
    } else {
      Catagory.style.display = 'none';
    }
  });

  AddProduct.addEventListener('click', function() {
    if (ProductAdd.style.display === 'none') {
      ProductAdd.style.display = 'block';
      Catagory.style.display = 'none';
      Seller.style.display = 'none';
      Admin.style.display='none';
      
    } else {
      ProductAdd.style.display = 'none';
    }
  });


