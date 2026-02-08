import React from 'react';
import { Button } from "@/components/ui/button";
import { ChevronDown } from "lucide-react";
import { motion } from "framer-motion";

export default function HeroSection() {
  const scrollToIngresso = () => {
    document.getElementById('ingresso')?.scrollIntoView({ behavior: 'smooth' });
  };

  return (
    <section id="hero" className="min-h-screen bg-gradient-to-b from-[#1a1a1a] via-[#212121] to-[#181818] relative flex flex-col items-center justify-center px-6 py-20 overflow-hidden">
      {/* Animated gradient orbs */}
      <div className="absolute top-0 left-1/4 w-96 h-96 bg-[#ff3131] rounded-full opacity-[0.03] blur-[120px] animate-pulse" />
      <div className="absolute bottom-0 right-1/4 w-96 h-96 bg-[#ff3131] rounded-full opacity-[0.02] blur-[120px] animate-pulse" style={{ animationDelay: '1s' }} />
      
      {/* Subtle grid pattern overlay */}
      <div className="absolute inset-0 opacity-[0.02]" 
           style={{
             backgroundImage: `linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px)`,
             backgroundSize: '60px 60px'
           }} 
      />

      {/* Decorative lines */}
      <div className="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#ff3131]/20 to-transparent" />
      <div className="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#ff3131]/20 to-transparent" />
      
      <div className="relative z-10 max-w-4xl mx-auto text-center">
        {/* Logo */}
        <motion.div 
          initial={{ opacity: 0, scale: 0.8 }}
          animate={{ opacity: 1, scale: 1 }}
          transition={{ duration: 0.8, ease: "easeOut" }}
          className="mb-12"
        >
          <div className="relative inline-block">
            {/* Glow effect behind logo */}
            <div className="absolute inset-0 bg-[#ff3131] opacity-5 blur-3xl scale-150" />
            <img 
              src="/img/logo-branca-transparente-background.png"
              alt="Ordem da Física"
              className="h-36 md:h-48 w-auto mx-auto relative z-10"
            />
          </div>
        </motion.div>

        {/* Institution Name */}
        <motion.h1 
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.2 }}
          className="text-5xl md:text-6xl lg:text-7xl font-extralight text-white tracking-wider mb-6 
                     bg-gradient-to-b from-white to-gray-400 bg-clip-text text-transparent"
        >
          Ordem da Física
        </motion.h1>
        
        {/* Subtitle */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.4 }}
        >
          <p className="text-base md:text-lg text-gray-400 tracking-[0.3em] uppercase font-light mb-12">
            Centro de Estudos e Pesquisas em Física
          </p>
        </motion.div>

        {/* Decorative element */}
        <motion.div 
          initial={{ scaleX: 0 }}
          animate={{ scaleX: 1 }}
          transition={{ duration: 0.8, delay: 0.6 }}
          className="flex items-center justify-center gap-3 mb-12"
        >
          <div className="w-12 h-px bg-gradient-to-r from-transparent to-gray-600" />
          <div className="w-2 h-2 rounded-full bg-[#ff3131]" />
          <div className="w-12 h-px bg-gradient-to-l from-transparent to-gray-600" />
        </motion.div>

        {/* Institutional text */}
        <motion.p 
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.8 }}
          className="text-gray-300 text-lg md:text-xl leading-relaxed font-light max-w-3xl mx-auto mb-14
                     [text-shadow:0_0_30px_rgba(0,0,0,0.5)]"
        >
          A Ordem da Física é uma instituição dedicada ao avanço do conhecimento científico, 
          reunindo estudiosos e pesquisadores comprometidos com a investigação rigorosa 
          dos fenômenos físicos e suas aplicações no mundo contemporâneo.
        </motion.p>

        {/* CTA Button */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 1 }}
          className="relative"
        >
          {/* Glow effect */}
          <div className="absolute inset-0 bg-[#ff3131] blur-2xl opacity-20 animate-pulse" />
          
          <Button 
            onClick={scrollToIngresso}
            className="relative group bg-gradient-to-r from-[#ff3131] to-[#ff4444] 
                       hover:from-[#ff4444] hover:to-[#ff3131] text-white 
                       px-12 py-7 text-base tracking-[0.2em] uppercase font-normal
                       transition-all duration-500 overflow-hidden
                       shadow-2xl shadow-[#ff3131]/50 hover:shadow-[#ff3131]/70
                       hover:scale-105 border border-[#ff3131]/50"
          >
            <span className="relative z-10 flex items-center gap-3">
              Solicitar Ingresso
              <span className="text-2xl group-hover:translate-x-1 transition-transform duration-300">→</span>
            </span>
            <div className="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 
                          translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700" />
          </Button>
        </motion.div>
      </div>

      {/* Scroll indicator */}
      <motion.div 
        initial={{ opacity: 0 }}
        animate={{ opacity: 1 }}
        transition={{ duration: 1, delay: 1.5 }}
        className="absolute bottom-10 left-1/2 -translate-x-1/2"
      >
        <div className="flex flex-col items-center gap-2 animate-bounce">
          <div className="w-px h-8 bg-gradient-to-b from-transparent to-gray-600" />
          <ChevronDown className="w-5 h-5 text-gray-600" />
        </div>
      </motion.div>
    </section>
  );
}
