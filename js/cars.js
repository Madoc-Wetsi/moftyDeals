const cars = [
  {
    id: 1,
    image: "/images/fbe1070141e84aba9814540c63526bd0.jpg",
    brand: "BMW",
    model: "M4 Competition",
    year: "2023",
    price: "$68,000",
    mileage: "12,000 km"
  },

  {
    id: 2,
    image: "/images/5d1413fd436a407a93ae4ef1a381d6a5.jpg",
    brand: "Toyota",
    model: "Corolla",
    year: "2024",
    price: "$26,000",
    mileage: "Brand New"
  },

  {
    id: 3,
    image: "/images/5b9567bf086e43439ac51eddd979f993.jpg",
    brand: "Toyota",
    model: "Corolla",
    year: "2024",
    price: "$26,000",
    mileage: "Brand New"
  },

  {
    id: 4,
    image: "/images/027cca9c89814a32aa9d207e67ac66c6.jpg",
    brand: "Audi",
    model: "A4",
    year: "2021",
    price: "$34,000",
    mileage: "28,000 km"
  },

  {
    id: 5,
    image: "/images/1ec419384cc44543bf31ea692c83c8a2.jpg",
    brand: "Mercedes-Benz",
    model: "C 200",
    year: "2022",
    price: "$42,000",
    mileage: "15,000 km"
  },

  {
    id: 6,
    image: "/images/53ba5058cc054863a1c20989e1793605.jpg",
    brand: "Nissan",
    model: "GT-R",
    year: "2020",
    price: "$78,000",
    mileage: "9,500 km"
  },

  {
    id: 7,
    image: "/images/5408994.jpg",
    brand: "Honda",
    model: "Civic",
    year: "2023",
    price: "$22,500",
    mileage: "7,000 km"
  },

  {
    id: 8,
    image: "/images/590814d79b7e4203b89e5fd775035097.jpg",
    brand: "Ford",
    model: "Mustang",
    year: "2022",
    price: "$39,000",
    mileage: "16,000 km"
  },

  {
    id: 9,
    image: "/images/5b9567bf086e43439ac51eddd979f993.jpg",
    brand: "Lexus",
    model: "ES 300h",
    year: "2021",
    price: "$31,000",
    mileage: "19,000 km"
  },

  {
    id: 10,
    image: "/images/5d1413fd436a407a93ae4ef1a381d6a5.jpg",
    brand: "Mazda",
    model: "CX-5",
    year: "2020",
    price: "$24,500",
    mileage: "32,000 km"
  },

  {
    id: 11,
    image: "/images/5dc7720481c648e683a36a4e06235ef9.jpg",
    brand: "Volkswagen",
    model: "Golf",
    year: "2023",
    price: "$27,000",
    mileage: "8,500 km"
  },

  {
    id: 12,
    image: "/images/627226f8064746508792da3acfc39f69.jpg",
    brand: "BMW",
    model: "X5",
    year: "2022",
    price: "$71,000",
    mileage: "13,000 km"
  },

  {
    id: 13,
    image: "/images/c0d119fa68aa4e8982c991c38d8f950f.jpg",
    brand: "Hyundai",
    model: "Tucson",
    year: "2021",
    price: "$23,800",
    mileage: "24,000 km"
  },

  {
    id: 14,
    image: "/images/c8572bb1a01c4f92aaeafb581a346824.jpg",
    brand: "Porsche",
    model: "911 Carrera",
    year: "2020",
    price: "$95,000",
    mileage: "11,000 km"
  },

  {
    id: 15,
    image: "/images/e976b7987ea5487daa063ce6c3101585.jpg",
    brand: "Kia",
    model: "Sportage",
    year: "2023",
    price: "$26,000",
    mileage: "6,200 km"
  },

  {
    id: 16,
    image: "/images/f41c794b62f546b89d62a6c820e2f145.jpg",
    brand: "Chevrolet",
    model: "Camaro",
    year: "2021",
    price: "$38,000",
    mileage: "14,000 km"
  },

  {
    id: 17,
    image: "/images/f41c794b62f546b89d62a6c820e2f1450001.jpg",
    brand: "Subaru",
    model: "Outback",
    year: "2022",
    price: "$29,500",
    mileage: "17,000 km"
  },

  {
    id: 18,
    image: "/images/fbe1070141e84aba9814540c63526bd0.jpg",
    brand: "Tesla",
    model: "Model 3",
    year: "2024",
    price: "$44,000",
    mileage: "Brand New"
  },

  {
    id: 19,
    image: "/images/ff9bf894da3c42c484715fdd78c483cb.jpg",
    brand: "Range Rover",
    model: "Evoque",
    year: "2021",
    price: "$48,000",
    mileage: "21,000 km"
  },

  {
    id: 20,
    image: "/images/futuristic-sports-car-Modern-car-Graphics-66382336-1.jpeg",
    brand: "Jeep",
    model: "Wrangler",
    year: "2023",
    price: "$41,500",
    mileage: "10,000 km"
  }
];

const carsdisplay = document.querySelector('.parentbox');

cars.forEach(car => {
  carsdisplay.innerHTML += ` 
  <div class = "car-card">
    <img src = "${car.image}" alt = "${car.model}">
    <h2>${car.brand}</h2>
    <p>${car.model}</p>
    <p>${car.year}</p>
    <p>${car.mileage}</p>
    <h3>${car.price}</h3>

    <button>View Details</button>
  </div>
  
  `;
});