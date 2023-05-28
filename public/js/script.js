// add active
$('.linkmenu').click(function() {
  $('.linkmenu').removeClass('active');
  $(this).addClass('active');
});



$('.salecarousel').owlCarousel({
  loop: false,
  nav: false,
  dots: false,
  navText: ['<i class="bi bi-chevron-left aria-hidden="true"></i>'
    , '<i class="bi bi-chevron-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 2,
      margin: 10,
    },
    768: {
      items: 3,
      margin: 20,
    },
    1200: {
      items: 4,
      margin: 20,
    }
  }
});
$('.partnercarousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: false,
  dots: false,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 3,
    },
    768: {
      items: 5
    },
    1200: {
      items: 6
    }
  }
});

var categoryproducts = [
  {
    categoryproduct__title: 'Nội thất',
    categoryproduct__img: './img/listproduct/2-ghe-1587981944-1.jpg',
    categoryproduct__id: 1,
  },
  {
    categoryproduct__title: 'Chăn, Ga, Gối & Nệm',
    categoryproduct__img: './img/listproduct/6-giuong-1587982051-1.jpg',
    categoryproduct__id: 2,
  },
  {
    categoryproduct__title: 'Lọ & Bình trang trí',
    categoryproduct__img: './img/listproduct/9-lo-trang-tri-1587982150-1.jpg',
    categoryproduct__id: 3,
  },
  {
    categoryproduct__title: 'Đồ trang trí',
    categoryproduct__img: './img/listproduct/3-ke-1587981966-1.jpg',
    categoryproduct__id: 4,
  },
  {
    categoryproduct__title: 'Đèn',
    categoryproduct__img: './img/listproduct/8-den-1587982122-1.jpg',
    categoryproduct__id: 5,
  },
  {
    categoryproduct__title: 'Phòng khách',
    categoryproduct__img: './img/listproduct/5-sofa-1587982024-1.jpg',
    categoryproduct__id: 6,
  },
  {
    categoryproduct__title: 'Đồ dùng chứa & Lưu trữ',
    categoryproduct__img: './img/listproduct/4-tu-1587981995-1.jpg',
    categoryproduct__id: 7,
  },
  {
    categoryproduct__title: 'Đồ gia dụng',
    categoryproduct__img: './img/listproduct/7-kitchen-1587716252-1.jpg',
    categoryproduct__id: 8,
  },
  {
    categoryproduct__title: 'Bàn trang trí',
    categoryproduct__img: './img/listproduct/1-ban-1587981900-1.jpg',
    categoryproduct__id: 9,
  },
  {
    categoryproduct__title: 'Đồ dùng nhà tắm',
    categoryproduct__img: './img/listproduct/10-guong-1587982173-1.jpg',
    categoryproduct__id: 10,
  },
  {
    categoryproduct__title: 'Thùng rác',
    categoryproduct__img: './img/listproduct/11-thungrac-1587982194-1.jpg',
    categoryproduct__id: 11,
  },
  {
    categoryproduct__title: 'Bộ sản phẩm',
    categoryproduct__img: './img/listproduct/12-bosanpham-1587982214-1.jpg',
    categoryproduct__id: 12,
  }
]
let categoryproduct__list = document.getElementById('categoryproduct__list');
let categoryproduct = categoryproducts;
showcategoryproduct(categoryproduct);

function showcategoryproduct(categoryproduct) {
  categoryproduct__list.innerHTML = '';
  categoryproduct.forEach(item => {
     let newItem = document.createElement('a');
    newItem.classList.add('categoryproduct__item');
    newItem.classList.add('col-lg-2');
    
     // create image
     let divImg = document.createElement('div');
     divImg.classList.add('categoryproduct__img');
     let newImage = new Image();
     newImage.src = item.categoryproduct__img;
     divImg.appendChild(newImage);
     newItem.appendChild(divImg);

   // create image
   let newTitle = document.createElement('div');
   newTitle.classList.add('categoryproduct__title');
   newTitle.innerText = item.categoryproduct__title;
   newItem.appendChild(newTitle);

     categoryproduct__list.appendChild(newItem);
  });
}