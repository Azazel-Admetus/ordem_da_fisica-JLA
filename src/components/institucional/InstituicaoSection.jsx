import React from 'react';
import { motion } from "framer-motion";

export default function InstituicaoSection() {
  return (
    <section id="instituicao" className="py-24 md:py-32 bg-gradient-to-b from-gray-100 via-gray-50 to-white relative">
      {/* Decorative elements */}
      <div className="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent" />
      <div className="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent" />
      
      {/* Background subtle pattern */}
      <div className="absolute inset-0 opacity-[0.02]" 
           style={{
             backgroundImage: `radial-gradient(circle at 1px 1px, #212121 1px, transparent 0)`,
             backgroundSize: '50px 50px'
           }} 
      />
      
      <div className="max-w-5xl mx-auto px-6 relative">
        {/* Decorative side element */}
        <div className="absolute left-0 top-1/2 -translate-y-1/2 w-px h-64 bg-gradient-to-b from-transparent via-[#ff3131]/20 to-transparent hidden lg:block" />
        <div className="absolute right-0 top-1/2 -translate-y-1/2 w-px h-64 bg-gradient-to-b from-transparent via-[#ff3131]/20 to-transparent hidden lg:block" />

        {/* Section header */}
        <motion.div 
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6 }}
          viewport={{ once: true }}
          className="mb-20 text-center"
        >
          <div className="inline-block relative">
            <h2 className="text-4xl md:text-5xl font-extralight text-[#212121] tracking-wide mb-6">
              A Instituição
            </h2>
            <div className="flex items-center justify-center gap-2">
              <div className="w-8 h-px bg-gradient-to-r from-transparent to-gray-300" />
              <div className="w-1.5 h-1.5 rounded-full bg-[#ff3131]" />
              <div className="w-8 h-px bg-gradient-to-l from-transparent to-gray-300" />
            </div>
          </div>
        </motion.div>

        {/* Content */}
        <div className="max-w-4xl mx-auto">
          <div className="space-y-10">
            {[
              "A Ordem da Física constitui-se como uma entidade de natureza científica e acadêmica, fundada com o propósito de congregar indivíduos dedicados ao estudo aprofundado da física em suas múltiplas dimensões teóricas e experimentais.",
              "Organizada sob princípios de excelência intelectual e rigor metodológico, a instituição promove um ambiente propício à investigação científica, ao intercâmbio de conhecimentos e ao desenvolvimento de competências analíticas entre seus membros.",
              "A Ordem reconhece a física como disciplina fundamental para a compreensão do universo e seus fenômenos, mantendo compromisso permanente com a formação de pesquisadores qualificados e com a preservação do patrimônio científico acumulado ao longo da história humana.",
              "Seus trabalhos são conduzidos com independência intelectual, prezando pela liberdade de investigação e pelo respeito às tradições acadêmicas que fundamentam o progresso do conhecimento científico."
            ].map((text, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, x: index % 2 === 0 ? -30 : 30 }}
                whileInView={{ opacity: 1, x: 0 }}
                transition={{ duration: 0.6, delay: index * 0.1 }}
                viewport={{ once: true }}
                className="relative"
              >
                <div className="absolute -left-4 top-2 w-1 h-1 rounded-full bg-[#ff3131]/40 hidden md:block" />
                <p className="text-gray-700 leading-relaxed text-lg md:text-xl font-light pl-4 md:pl-8
                             border-l-2 border-transparent hover:border-gray-200 transition-colors duration-500">
                  {text}
                </p>
              </motion.div>
            ))}
          </div>

          {/* Quote decoration */}
          <motion.div
            initial={{ opacity: 0, scale: 0.9 }}
            whileInView={{ opacity: 1, scale: 1 }}
            transition={{ duration: 0.6, delay: 0.4 }}
            viewport={{ once: true }}
            className="mt-16 pt-12 border-t border-gray-200 text-center"
          >
            <p className="text-gray-500 italic text-base font-light tracking-wide">
              "O conhecimento é a luz que ilumina o caminho da compreensão universal"
            </p>
          </motion.div>
        </div>
      </div>
    </section>
  );
}