
import axios from 'axios';
import { useCallback, useState } from 'react';

import Input from '../Components/Input';
import {FcGoogle} from 'react-icons/fc'
import {FaFacebook, FaGithub} from 'react-icons/fa'
export async function auth() {
  return {
    props: {}
  }
}

const Login = () => {
  const [email, setEmail] = useState('');
  const [name, setName] = useState('');
  const [password, setPassword] = useState('');

  const [variant, setVariant] = useState('login');

  const toggleVariant = useCallback(() => {
    setVariant((currentVariant) => currentVariant === 'login' ? 'register' : 'login');
  }, []);

 

  return (
    <div className="relative h-full w-full ">
      <div className=" w-full h-full lg:bg-opacity-50">
       
        <div className="flex justify-center  ">
          <div className="  px-16  shadow-lg shadow-black py-5 self-center mt-1 lg:w-2/5 lg:max-w-md rounded-md w-full">
            <h2 className="text-black text-4xl mb-8 font-semibold">
              {variant === 'login' ? 'Sign in' : 'Register'}
            </h2>
            <div className="flex flex-col gap-4">
              {variant === 'register' && (
                <Input
                  id="name"
                  type="text"
                  label="Username"
                  value={name}
                
                />
              )}
              <Input
                id="email"
                type="email"
                label="Email"
                value={email}
              
              />
              <Input
                type="password" 
                id="password" 
                label="Password" 
                value={password}
              
              />
            </div>
            <button  className="bg-[#76A713] py-3 text-white font-bold rounded-md w-full mt-6 hover:bg-[#5C820F] transition">
              {variant === 'login' ? 'Login' : 'Sign up'}
            </button>
            <div className='flex flex-row items-center gap-4 mt-4 justify-center'>
                <div className='w-10 h-10 bg-white rounded-full flex items-center justify-center cursor-pointer hover:opacity-80 transition'>
                  <FcGoogle 
                  
                  size={30}/>
                </div>
                <div className='w-10 h-10 bg-white text-blue-600 rounded-full flex items-center justify-center cursor-pointer hover:opacity-80 transition'>
                  <FaFacebook 
                   
                   size={30}/>
                </div>
            </div>
            <p className="text-neutral-500 mt-3">
              {variant === 'login' ? 'First time using DGK store?' : 'Already have an account?'}
              <span onClick={toggleVariant} className="text-black ml-1 hover:underline cursor-pointer">
                {variant === 'login' ? 'Create an account' : 'Login'}
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Login
