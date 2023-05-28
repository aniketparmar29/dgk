import React from 'react'
import { Route,Routes } from 'react-router-dom'
import Home from './Home.jsx'
import Singup from './Singup.jsx'
// import Admin from '../admin/Admin'
import Login from './Login.jsx'
import Product from './Product.jsx'
import  Cart from "./Cart.jsx"
import Aboutus from './Aboutus.jsx'
import Meetourfarmers from './Meetourfarmers.jsx'
const MainRoute = () => {
  return (
    <div>
        <Routes>
              <Route path='/' element={<Home/>}></Route>
              <Route path='/singup' element={<Singup/>}></Route>
              <Route path="/login" element={<Login/>}></Route>
              <Route path="/product" element={<Product/>}></Route>
              <Route path="/cart" element={<Cart/>}></Route>
              <Route path="/aboutus" element={<Aboutus/>}></Route>
              <Route path="/meetourfarmers" element={<Meetourfarmers/>}></Route>
        </Routes>
      
    </div>
  )
}

export default MainRoute
