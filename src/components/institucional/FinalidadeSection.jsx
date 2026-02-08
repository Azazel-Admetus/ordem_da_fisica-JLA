import React from 'react';
import { BookOpen, Users, Microscope } from "lucide-react";
import { motion } from "framer-motion";

export default function FinalidadeSection() {
  const areas = [
    {
      icon: BookOpen,
      title: "Estudos",
      description: "Promoção de estudos sistemáticos em física teórica e experimental, com ênfase na compreensão profunda dos princípios fundamentais da natureza."
    },
    {
      icon: Microscope,
      title: "Pesquisa",
      description: "Desenvolvimento de pesquisas originais que contribuam para o avanço do conhecimento científico e para a solução de problemas relevantes."
    },
    {
      icon: Users,
      title: "Formação",
      description: "Capacitação contínua de seus membros através de programas estruturados de formação acadêmica e desenvolvimento científico."
    }
  ];

  return (
    <section id="finalidade" className="py-24 md:py-32 bg-gradient-to-b from-white via-gray-100 to-gray-50 relative overflow-hidden">
      {/* Background decoration */}
      <div className="absolute inset-0 opacity-[0.02]" 
           style={{
             backgroundImage: `radial-gradient(circle at 2px 2px, #212121 1px, transparent 0)`,
             backgroundSize: '40px 40px'
           }} 
      />

      <div className="absolute top-20 right-0 w-72 h-72 bg-[#ff3131] rounded-full opacity-[0.02] blur-[100px]" />
      <div className="absolute bottom-20 left-0 w-72 h-72 bg-[#ff3131] rounded-full opacity-[0.02] blur-[100px]" />

      <div className="max-w-6xl mx-auto px-6 relative">
        {/* Section header */}
        <motion.div 
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6 }}
          viewport={{ once: true }}
          className="mb-20 text-center"
        >
          <h2 className="text-4xl md:text-5xl font-extralight text-[#212121] tracking-wide mb-6">
            Finalidade e Atuação
          </h2>
          <div className="flex items-center justify-center gap-2">
            <div className="w-8 h-px bg-gradient-to-r from-transparent to-gray-300" />
            <div className="w-1.5 h-1.5 rounded-full bg-[#ff3131]" />
            <div className="w-8 h-px bg-gradient-to-l from-transparent to-gray-300" />
          </div>
        </motion.div>

        {/* Intro text */}
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6, delay: 0.2 }}
          viewport={{ once: true }}
          className="max-w-3xl mx-auto mb-24"
        >
          <p className="text-gray-700 leading-relaxed text-lg md:text-xl font-light text-center">
            A Ordem da Física orienta suas atividades pela busca constante do conhecimento, 
            atuando de forma integrada em três eixos fundamentais que definem sua missão institucional 
            e norteiam todas as suas iniciativas.
          </p>
        </motion.div>

        {/* Areas grid */}
        <div className="grid md:grid-cols-3 gap-8 lg:gap-16 mb-24">
          {areas.map((area, index) => (
            <motion.div 
              key={index}
              initial={{ opacity: 0, y: 30 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: index * 0.15 }}
              viewport={{ once: true }}
              className="relative group"
            >
              {/* Card background with hover effect */}
              <div className="absolute inset-0 bg-white rounded-2xl opacity-0 group-hover:opacity-100 
                            shadow-xl transition-all duration-500 -z-10" />
              
              <div className="relative p-8 text-center">
                {/* Icon container */}
                <div className="mb-8 inline-flex items-center justify-center relative">
                  {/* Animated ring */}
                  <div className="absolute inset-0 w-20 h-20 rounded-full border border-gray-200 
                                group-hover:border-[#ff3131]/30 group-hover:scale-110 
                                transition-all duration-500" />
                  <div className="absolute inset-0 w-20 h-20 rounded-full bg-gradient-to-br 
                                from-[#ff3131]/5 to-transparent opacity-0 group-hover:opacity-100 
                                group-hover:scale-110 transition-all duration-500" />
                  
                  {/* Icon */}
                  <div className="relative z-10 w-20 h-20 flex items-center justify-center">
                    <area.icon className="w-8 h-8 text-[#212121] group-hover:scale-110 transition-transform duration-500" strokeWidth={1.5} />
                  </div>
                </div>

                {/* Title */}
                <h3 className="text-2xl font-light text-[#212121] mb-5 tracking-wide">
                  {area.title}
                </h3>

                {/* Decorative line */}
                <div className="w-12 h-px bg-gradient-to-r from-gray-300 via-[#ff3131]/40 to-gray-300 mx-auto mb-5 
                              group-hover:w-20 transition-all duration-500" />

                {/* Description */}
                <p className="text-gray-600 leading-relaxed text-base font-light">
                  {area.description}
                </p>
              </div>

              {/* Connection lines between cards */}
              {index < areas.length - 1 && (
                <div className="hidden lg:block absolute top-1/2 -right-8 w-16 h-px bg-gradient-to-r from-gray-200 to-transparent" />
              )}
            </motion.div>
          ))}
        </div>

        {/* Additional text */}
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6, delay: 0.4 }}
          viewport={{ once: true }}
          className="max-w-3xl mx-auto"
        >
          <div className="relative p-10 md:p-12 rounded-2xl border border-gray-200 bg-white/50 backdrop-blur-sm">
            <div className="absolute top-0 left-8 w-1 h-full bg-gradient-to-b from-[#ff3131]/30 via-[#ff3131]/10 to-transparent" />
            <p className="text-gray-700 leading-relaxed text-lg md:text-xl font-light pl-6">
              A atuação da Ordem transcende a mera transmissão de conhecimentos, 
              buscando formar indivíduos capazes de pensar criticamente, investigar 
              com método e contribuir de forma significativa para o progresso da ciência.
            </p>
          </div>
        </motion.div>
      </div>
    </section>
  );
}