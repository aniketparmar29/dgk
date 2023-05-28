import React from 'react'
import {Box, Image,Text ,SimpleGrid,useMediaQuery,IconButton} from '@chakra-ui/react'
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';
import {
  Menu,
  MenuButton,
  MenuList,
  MenuItem
 
} from '@chakra-ui/react'
import {  HamburgerIcon } from '@chakra-ui/icons'
import {FaPhoneAlt} from "react-icons/fa"

export default function Navbar() {
  const [navMid] = useMediaQuery('(min-width: 800px)')
  return (
    <>
   
   { navMid &&
      <Box fontFamily={"sans-serif"} width={"100%"}  bgColor={"#76A713"} display={"flex"} justifyContent={"space-between"}>
        <Box height={"14"} bgColor={"#76A713"} color={"white"} pl={"10"}  fontSize={'larger'} fontWeight={"medium"} pt={"2"} >
        Welcome to our Organic store DGK!
        </Box>
        <Box w={"200px"} fontSize={"large"} backgroundColor={"#5C820F"} px={"3"} height={"14"} color={"white"} pt={"3"} fontWeight={"bold"} display={"flex"} gap={"5px"}><Box pt={"4%"}><FaPhoneAlt/></Box>
        <Box>12345 67890</Box></Box>
      
       </Box>
       
         
   }
    { 
            !navMid && 
            
            <Box width={"100%"}  bgColor={"#76A713"} display={"flex"} justifyContent={"space-between"}>
            <Box height={"33"} bgColor={"#76A713"} color={"white"} pl={"5"}  fontSize={'medium'} fontWeight={"medium"} pt={"2"} >
            Welcome to our Organic store DGK!
            </Box>
            <Box w={"200px"} fontSize={"medium"} backgroundColor={"#5C820F"} px={"3"} height={"14"} color={"white"} pt={"3"} fontWeight={"bold"} display={"flex"} gap={"5px"}><Box pt={"4%"}><FaPhoneAlt/></Box>
            <Box>12345 678909</Box></Box>
          
           </Box>
             
    }
    { navMid &&
   <Box  width={"100%"} fontFamily={"sans-serif"} bgColor={"#F8F4F1"} height={"24"} display={"flex"} justifyContent={"space-evenly"} fontWeight={"bold"} fontSize={"larger"}>

    <Box  pt={'8'}><Link to="/">Home</Link></Box>
    <Box pt={"8"}> <Link to="/aboutus">About us</Link></Box>
    <Box pt={"8"}><Link to="/meetourfarmers">meet our farmers</Link></Box>
    <Box pt={"2"} ><Link to="/"><Image height={"20"} src="https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/images/logo-mobile.png"/></Link></Box>
    <Box pt={"8"}><Link to="/product">All Products</Link></Box>
   

  
    <Box pt={"8"}><Link to="/Cart">Cart</Link></Box>
    <Box pt={"8"}><Link to="/Login">Login</Link></Box>
   
   </Box>
}
{ 
            !navMid && 
            <Box  width={"100%"} bgColor={"#F8F4F1"} height={"24"} display={"flex"} justifyContent={"space-evenly"} fontWeight={"bold"} fontSize={"medium"}>

    
          <Box pt={"2"} ><Link to="/"><Image height={"20"} src="https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/images/logo-mobile.png"/></Link></Box>
     <Menu>
            <MenuButton
              mt={"7"}
              p={"2px"}
              as={IconButton}
              bgColor={"white"}
              icon={<HamburgerIcon />}
              fontSize={"x-large"}
               color={"black"}
              />
            <MenuList bgColor={"white"} borderRadius={"none"} fontSize={"large"} >
              <MenuItem style={{backgroundColor:"white",fontFamily:"sans-serif",color:"black"}}> <Link to="/">Home</Link></MenuItem>
              <MenuItem  style={{backgroundColor:"white",fontFamily:"sans-serif",color:"black"}} ><Link to="/product">All Products</Link></MenuItem>
              <MenuItem  style={{backgroundColor:"white",fontFamily:"sans-serif",color:"black"}} ><Link to="/aboutus">About us</Link></MenuItem>

              <MenuItem  style={{backgroundColor:"white",fontFamily:"sans-serif",color:"black"}}> <Link to="/meetourfarmers">meet our farmers</Link></MenuItem>
              <MenuItem  style={{backgroundColor:"white",fontFamily:"sans-serif",color:"black"}}> <Link to="/Cart">Cart</Link></MenuItem>
              <MenuItem  style={{backgroundColor:"white",fontFamily:"sans-serif",color:"black"}}> <Link to="/Login">Login</Link></MenuItem>
            
            </MenuList>
          </Menu>
            
   </Box>
            }
  </>
  );
}
