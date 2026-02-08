import React from 'react';
import { motion } from "framer-motion";

export default function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-gradient-to-b from-[#1a1a1a] to-[#212121] py-20 relative overflow-hidden">
      {/* Background elements */}
      <div className="absolute inset-0 opacity-[0.02]" 
           style={{
             backgroundImage: `radial-gradient(circle at 2px 2px, white 1px, transparent 0)`,
             backgroundSize: '40px 40px'
           }} 
      />
      <div className="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#ff3131]/30 to-transparent" />

      <div className="max-w-6xl mx-auto px-6 relative">
        <div className="flex flex-col items-center text-center">
          {/* Logo */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6 }}
            viewport={{ once: true }}
            className="mb-8"
          >
            <div className="relative inline-block">
              <div className="absolute inset-0 bg-[#ff3131] opacity-5 blur-2xl scale-150" />
              <img 
                src="/img/logo-branca-transparente-background.png"
                alt="Ordem da Física"
                className="h-24 w-auto relative z-10 opacity-90 hover:opacity-100 transition-opacity duration-500"
              />
            </div>
          </motion.div>

          {/* Name */}
          <motion.h3 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6, delay: 0.1 }}
            viewport={{ once: true }}
            className="text-2xl font-extralight text-white tracking-wide mb-3"
          >
            Ordem da Física
          </motion.h3>
          
          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6, delay: 0.2 }}
            viewport={{ once: true }}
            className="text-gray-500 text-sm tracking-[0.3em] uppercase mb-10"
          >
            Centro de Estudos e Pesquisas em Física
          </motion.p>

          {/* Decorative element */}
          <motion.div 
            initial={{ scaleX: 0 }}
            whileInView={{ scaleX: 1 }}
            transition={{ duration: 0.8, delay: 0.3 }}
            viewport={{ once: true }}
            className="flex items-center justify-center gap-3 mb-10"
          >
            <div className="w-16 h-px bg-gradient-to-r from-transparent to-gray-700" />
            <div className="w-1.5 h-1.5 rounded-full bg-[#ff3131]" />
            <div className="w-16 h-px bg-gradient-to-l from-transparent to-gray-700" />
          </motion.div>

          {/* Navigation */}
          <motion.nav 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6, delay: 0.4 }}
            viewport={{ once: true }}
            className="flex flex-wrap justify-center gap-10 mb-12"
          >
            <a 
              href="#instituicao" 
              className="relative text-gray-400 hover:text-white text-sm tracking-wider transition-colors duration-300 group"
              onClick={(e) => {
                e.preventDefault();
                document.getElementById('instituicao')?.scrollIntoView({ behavior: 'smooth' });
              }}
            >
              A Instituição
              <span className="absolute -bottom-1 left-0 w-0 h-px bg-[#ff3131] group-hover:w-full transition-all duration-300" />
            </a>
            <a 
              href="#finalidade" 
              className="relative text-gray-400 hover:text-white text-sm tracking-wider transition-colors duration-300 group"
              onClick={(e) => {
                e.preventDefault();
                document.getElementById('finalidade')?.scrollIntoView({ behavior: 'smooth' });
              }}
            >
              Finalidade
              <span className="absolute -bottom-1 left-0 w-0 h-px bg-[#ff3131] group-hover:w-full transition-all duration-300" />
            </a>
            <a 
              href="#ingresso" 
              className="relative text-gray-400 hover:text-white text-sm tracking-wider transition-colors duration-300 group"
              onClick={(e) => {
                e.preventDefault();
                document.getElementById('ingresso')?.scrollIntoView({ behavior: 'smooth' });
              }}
            >
              Ingresso
              <span className="absolute -bottom-1 left-0 w-0 h-px bg-[#ff3131] group-hover:w-full transition-all duration-300" />
            </a>
          </motion.nav>

          {/* Contact / Social */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6, delay: 0.5 }}
            viewport={{ once: true }}
            className="flex flex-col items-center gap-4 mb-12"
          >
            <p className="text-gray-500 text-xs tracking-[0.3em] uppercase">
              Contato
            </p>
            <div className="flex flex-col md:flex-row items-center gap-4 text-sm">
              <a
                href="mailto:ordemdafisica@gmail.com"
                className="text-gray-300 hover:text-white transition-colors duration-300"
              >
                ordemdafisica@gmail.com
              </a>
              <span className="hidden md:inline text-gray-700">•</span>
              <a
                href="https://www.instagram.com/ordemdafisicajla"
                target="_blank"
                rel="noreferrer"
                className="text-gray-300 hover:text-white transition-colors duration-300"
              >
                Instagram @ordemdafisicajla
              </a>
            </div>
          </motion.div>

          {/* Copyright */}
          <motion.div
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 0.6, delay: 0.6 }}
            viewport={{ once: true }}
          >
            <div className="w-32 h-px bg-gradient-to-r from-transparent via-gray-800 to-transparent mb-6" />
            <p className="text-gray-600 text-xs font-light tracking-wide">
              © {currentYear} Ordem da Física. Todos os direitos reservados.
            </p>
          </motion.div>
        </div>
      </div>
    </footer>
  );
}
