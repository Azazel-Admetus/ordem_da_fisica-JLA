import React from 'react';
import Navbar from '../components/institucional/Navbar';
import HeroSection from '../components/institucional/HeroSection';
import InstituicaoSection from '../components/institucional/InstituicaoSection';
import FinalidadeSection from '../components/institucional/FinalidadeSection';
import IngressoSection from '../components/institucional/IngressoSection';
import Footer from '../components/institucional/Footer';

export default function Home() {
  return (
    <div className="min-h-screen bg-white">
      <Navbar />
      <HeroSection />
      <InstituicaoSection />
      <FinalidadeSection />
      <IngressoSection />
      <Footer />
    </div>
  );
}