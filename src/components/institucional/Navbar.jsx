import React, { useState, useEffect } from 'react';
import { Button } from "@/components/ui/button";
import { Menu, X } from "lucide-react";
import { motion, AnimatePresence } from "framer-motion";

export default function Navbar() {
  const [isHeroVisible, setIsHeroVisible] = useState(true);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  useEffect(() => {
    const heroSection = document.getElementById('hero');
    if (!heroSection) {
      setIsHeroVisible(false);
      return;
    }

    const observer = new IntersectionObserver(
      ([entry]) => {
        setIsHeroVisible(entry.isIntersecting);
      },
      { threshold: 0.2 }
    );

    observer.observe(heroSection);
    return () => observer.disconnect();
  }, []);

  const scrollToSection = (id) => {
    document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' });
    setMobileMenuOpen(false);
  };

  const navItems = [
    { label: 'A Instituição', id: 'instituicao' },
    { label: 'Finalidade', id: 'finalidade' },
    { label: 'Ingresso', id: 'ingresso' }
  ];

  return (
    <>
      <motion.nav 
        initial={{ y: -100 }}
        animate={{ y: 0 }}
        transition={{ duration: 0.6 }}
        className={`fixed top-0 left-0 right-0 z-50 transition-[background-color,backdrop-filter,box-shadow,border-color] duration-700 ease-out ${
          !isHeroVisible
            ? 'bg-[#212121]/95 backdrop-blur-lg shadow-lg border-b border-white/5' 
            : 'bg-transparent'
        }`}
      >
        <div className="max-w-7xl mx-auto px-6 py-4">
          <div className="flex items-center justify-between md:grid md:grid-cols-3 md:items-center">
            {/* Logo */}
            <button 
              onClick={() => window.scrollTo({ top: 0, behavior: 'smooth' })}
              className={`flex items-center gap-3 group md:justify-self-start transition-all duration-700 ease-out ${
                isHeroVisible ? 'md:opacity-0 md:pointer-events-none md:-translate-y-1' : 'md:opacity-100 md:translate-y-0'
              }`}
            >
              <img 
                src="/img/logo-branca-transparente-background.png"
                alt="Ordem da Física"
                className="h-10 w-auto opacity-90 group-hover:opacity-100 transition-opacity duration-300"
              />
              <div className="hidden md:block">
                <div className="text-white text-sm font-light tracking-wide">Ordem da Física</div>
                <div className="text-gray-500 text-xs tracking-widest uppercase">Centro de Estudos</div>
              </div>
            </button>

            {/* Desktop Navigation */}
            <div className="hidden md:flex items-center justify-center gap-8">
              {navItems.map((item, index) => (
                <button
                  key={index}
                  onClick={() => scrollToSection(item.id)}
                  className="relative text-gray-300 hover:text-white text-sm tracking-wide 
                           transition-colors duration-300 group"
                >
                  {item.label}
                  <span className="absolute -bottom-1 left-0 w-0 h-px bg-[#ff3131] 
                                 group-hover:w-full transition-all duration-300" />
                </button>
              ))}
            </div>

            {/* CTA Button */}
            <div className={`hidden md:flex md:justify-self-end transition-all duration-700 ease-out ${
              isHeroVisible ? 'md:opacity-0 md:pointer-events-none md:-translate-y-1' : 'md:opacity-100 md:translate-y-0'
            }`}>
              <Button
                onClick={() => scrollToSection('ingresso')}
                className="items-center gap-2 bg-gradient-to-r from-[#ff3131] to-[#ff4d4d]
                         hover:from-[#ff4d4d] hover:to-[#ff3131] text-white px-6 py-2.5
                         text-xs tracking-[0.2em] uppercase font-semibold
                         transition-all duration-300 shadow-lg shadow-[#ff3131]/30
                         hover:shadow-xl hover:shadow-[#ff3131]/50 hover:-translate-y-0.5
                         border border-[#ff6b6b]/60"
              >
                Solicitar Ingresso
              </Button>
            </div>

            {/* Mobile Menu Button */}
            <button
              onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
              className="md:hidden text-white p-2"
            >
              {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>
      </motion.nav>

      {/* Mobile Menu */}
      <AnimatePresence>
        {mobileMenuOpen && (
          <motion.div
            initial={{ opacity: 0, x: '100%' }}
            animate={{ opacity: 1, x: 0 }}
            exit={{ opacity: 0, x: '100%' }}
            transition={{ duration: 0.3 }}
            className="fixed inset-0 z-40 bg-[#212121] md:hidden"
          >
            <div className="flex flex-col items-center justify-center h-full gap-8">
              {navItems.map((item, index) => (
                <motion.button
                  key={index}
                  initial={{ opacity: 0, y: 20 }}
                  animate={{ opacity: 1, y: 0 }}
                  transition={{ duration: 0.3, delay: index * 0.1 }}
                  onClick={() => scrollToSection(item.id)}
                  className="text-white text-2xl font-light tracking-wide hover:text-[#ff3131] 
                           transition-colors duration-300"
                >
                  {item.label}
                </motion.button>
              ))}
              <motion.div
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.3, delay: navItems.length * 0.1 }}
              >
                <Button
                  onClick={() => scrollToSection('ingresso')}
                  className="bg-gradient-to-r from-[#ff3131] to-[#ff4d4d] hover:from-[#ff4d4d] hover:to-[#ff3131]
                           text-white px-10 py-6 text-sm tracking-[0.2em] uppercase font-semibold
                           shadow-lg shadow-[#ff3131]/40 border border-[#ff6b6b]/60"
                >
                  Solicitar Ingresso
                </Button>
              </motion.div>
            </div>
          </motion.div>
        )}
      </AnimatePresence>
    </>
  );
}
