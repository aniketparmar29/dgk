import React from 'react'
import {
  Box,
  Flex,
  Heading,
  FormControl,
  FormLabel,
  Input,
  Button,
} from '@chakra-ui/react';

const Singup = () => {
  const handleSignup = (event) => {
    event.preventDefault();
    // Implement your signup logic here
    // Access the form data using event.target.elements
    const formData = new FormData(event.target);
    const email = formData.get('email');
    const password = formData.get('password');
    // Perform your signup actions
    console.log('Email:', email);
    console.log('Password:', password);
  };

  return (
    <Flex
      minH="100vh"
      align="center"
      justify="center"
      bg="gray.100"
      p={4}
    >
      <Box
        bg="white"
        rounded="lg"
        p={8}
        shadow="md"
        maxW={{ base: '90%', sm: '400px', md: '500px' }}
        w="full"
      >
        <Heading mb={6} textAlign="center">
          Signup
        </Heading>
        <form onSubmit={handleSignup}>
          <FormControl id="email" mb={4}>
            <FormLabel>Email address</FormLabel>
            <Input type="email" name="email" placeholder="Enter your email" />
          </FormControl>
          <FormControl id="password" mb={6}>
            <FormLabel>Password</FormLabel>
            <Input
              type="password"
              name="password"
              placeholder="Enter your password"
            />
          </FormControl>
          <Button bgColor={"#76A713"} color={"white"} size="lg" isFullWidth type="submit">
            Sign Up
          </Button>
        </form>
      </Box>
    </Flex>
  );
}


export default Singup
