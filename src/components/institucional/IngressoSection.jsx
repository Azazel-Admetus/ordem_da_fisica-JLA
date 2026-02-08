import React, { useState } from 'react';
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Textarea } from "@/components/ui/textarea";
import { CheckCircle2, Send } from "lucide-react";
import { motion } from "framer-motion";

export default function IngressoSection() {
  const [formData, setFormData] = useState({
    nome: '',
    email: '',
    telefone: '',
    formacao: '',
    mensagem: ''
  });
  const [submitted, setSubmitted] = useState(false);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    // Backend logic will be implemented by the user
    console.log('Form data:', formData);
    setSubmitted(true);
  };

  return (
    <section id="ingresso" className="py-24 md:py-32 bg-gradient-to-b from-gray-50 via-gray-100 to-gray-50 relative overflow-hidden">
      {/* Background elements */}
      <div className="absolute inset-0 opacity-[0.02]" 
           style={{
             backgroundImage: `linear-gradient(60deg, transparent 0%, transparent 49%, #212121 49%, #212121 51%, transparent 51%, transparent 100%)`,
             backgroundSize: '80px 80px'
           }} 
      />

      <div className="max-w-5xl mx-auto px-6 relative">
        {/* Section header */}
        <motion.div 
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6 }}
          viewport={{ once: true }}
          className="mb-20 text-center"
        >
          <h2 className="text-4xl md:text-5xl font-extralight text-[#212121] tracking-wide mb-6">
            Ingresso
          </h2>
          <div className="flex items-center justify-center gap-2">
            <div className="w-8 h-px bg-gradient-to-r from-transparent to-gray-300" />
            <div className="w-1.5 h-1.5 rounded-full bg-[#ff3131]" />
            <div className="w-8 h-px bg-gradient-to-l from-transparent to-gray-300" />
          </div>
        </motion.div>

        {/* Info text */}
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6, delay: 0.2 }}
          viewport={{ once: true }}
          className="max-w-3xl mx-auto mb-20"
        >
          <div className="space-y-8 text-gray-700 leading-relaxed text-lg font-light">
            <p className="text-center md:text-xl">
              O ingresso na Ordem da Física é destinado a indivíduos que demonstrem 
              interesse genuíno pelo estudo da física e compromisso com os valores 
              acadêmicos que fundamentam a instituição.
            </p>
            <div className="relative p-8 rounded-2xl border border-gray-200 bg-white/50 backdrop-blur-sm">
              <div className="absolute -left-1 top-1/2 -translate-y-1/2 w-2 h-16 bg-gradient-to-b from-[#ff3131]/50 to-[#ff3131]/20 rounded-r" />
              <p className="text-center">
                Os candidatos devem preencher o formulário de inscrição abaixo. 
                Após análise das informações, a Ordem entrará em contato para 
                dar continuidade ao processo de admissão.
              </p>
            </div>
          </div>
        </motion.div>

        {/* Form */}
        <motion.div 
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6, delay: 0.3 }}
          viewport={{ once: true }}
          className="max-w-2xl mx-auto"
        >
          {!submitted ? (
            <div className="relative p-8 md:p-12 rounded-3xl border border-gray-200 bg-white shadow-xl">
              {/* Decorative corner elements */}
              <div className="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-[#ff3131]/20 rounded-tl-3xl" />
              <div className="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-[#ff3131]/20 rounded-br-3xl" />

              <form onSubmit={handleSubmit} className="space-y-7 relative">
                <div className="space-y-3 group">
                  <Label htmlFor="nome" className="text-sm font-normal text-gray-600 tracking-wide flex items-center gap-2">
                    Nome Completo
                    <span className="text-[#ff3131]">*</span>
                  </Label>
                  <Input
                    id="nome"
                    name="nome"
                    type="text"
                    required
                    value={formData.nome}
                    onChange={handleChange}
                    className="border-gray-200 focus:border-[#ff3131]/50 focus:ring-2 focus:ring-[#ff3131]/10 
                             h-12 font-light transition-all duration-300 rounded-lg"
                    placeholder="Seu nome completo"
                  />
                </div>

                <div className="grid md:grid-cols-2 gap-7">
                  <div className="space-y-3">
                    <Label htmlFor="email" className="text-sm font-normal text-gray-600 tracking-wide flex items-center gap-2">
                      E-mail
                      <span className="text-[#ff3131]">*</span>
                    </Label>
                    <Input
                      id="email"
                      name="email"
                      type="email"
                      required
                      value={formData.email}
                      onChange={handleChange}
                      className="border-gray-200 focus:border-[#ff3131]/50 focus:ring-2 focus:ring-[#ff3131]/10 
                               h-12 font-light transition-all duration-300 rounded-lg"
                      placeholder="seu@email.com"
                    />
                  </div>

                  <div className="space-y-3">
                    <Label htmlFor="telefone" className="text-sm font-normal text-gray-600 tracking-wide flex items-center gap-2">
                      Telefone
                      <span className="text-[#ff3131]">*</span>
                    </Label>
                    <Input
                      id="telefone"
                      name="telefone"
                      type="tel"
                      required
                      value={formData.telefone}
                      onChange={handleChange}
                      className="border-gray-200 focus:border-[#ff3131]/50 focus:ring-2 focus:ring-[#ff3131]/10 
                               h-12 font-light transition-all duration-300 rounded-lg"
                      placeholder="(00) 00000-0000"
                    />
                  </div>
                </div>

                <div className="space-y-3">
                  <Label htmlFor="formacao" className="text-sm font-normal text-gray-600 tracking-wide">
                    Formação Acadêmica
                  </Label>
                  <Input
                    id="formacao"
                    name="formacao"
                    type="text"
                    value={formData.formacao}
                    onChange={handleChange}
                    className="border-gray-200 focus:border-[#ff3131]/50 focus:ring-2 focus:ring-[#ff3131]/10 
                             h-12 font-light transition-all duration-300 rounded-lg"
                    placeholder="Nome da escola ou faculdade"
                  />
                </div>

                <div className="space-y-3">
                  <Label htmlFor="mensagem" className="text-sm font-normal text-gray-600 tracking-wide">
                    Motivação (opcional)
                  </Label>
                  <Textarea
                    id="mensagem"
                    name="mensagem"
                    value={formData.mensagem}
                    onChange={handleChange}
                    className="border-gray-200 focus:border-[#ff3131]/50 focus:ring-2 focus:ring-[#ff3131]/10 
                             min-h-[140px] font-light resize-none transition-all duration-300 rounded-lg"
                    placeholder="Descreva brevemente seu interesse pela física e pela Ordem"
                  />
                </div>

                <div className="pt-6">
                  <Button 
                    type="submit"
                    className="relative w-full bg-gradient-to-r from-[#212121] to-[#2a2a2a] hover:from-[#2a2a2a] 
                             hover:to-[#212121] text-white h-14 text-sm tracking-[0.2em] uppercase font-light 
                             transition-all duration-500 rounded-lg overflow-hidden group"
                  >
                    <span className="relative z-10 flex items-center justify-center gap-3">
                      Enviar Inscrição
                      <Send className="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" />
                    </span>
                    <div className="absolute inset-0 bg-gradient-to-r from-[#ff3131]/0 via-[#ff3131]/10 to-[#ff3131]/0 
                                  translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000" />
                  </Button>
                </div>

                {/* Location notice */}
                <div className="p-4 rounded-lg bg-amber-50 border border-amber-200">
                  <p className="text-sm text-amber-800 text-center font-normal leading-relaxed">
                    <strong>Atenção:</strong> As inscrições são exclusivas para residentes em Ouro Preto do Oeste/RO.
                  </p>
                </div>

                <p className="text-xs text-gray-500 text-center font-light leading-relaxed">
                  Ao enviar este formulário, você declara interesse em participar do processo 
                  de ingresso na Ordem da Física.
                </p>
              </form>
            </div>
          ) : (
            <motion.div 
              initial={{ opacity: 0, scale: 0.9 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ duration: 0.5 }}
              className="text-center py-16 px-8 rounded-3xl border border-green-200 bg-gradient-to-b from-green-50/50 to-white"
            >
              <motion.div
                initial={{ scale: 0 }}
                animate={{ scale: 1 }}
                transition={{ duration: 0.5, delay: 0.2, type: "spring" }}
                className="inline-flex items-center justify-center w-20 h-20 rounded-full 
                          bg-gradient-to-br from-green-100 to-green-50 mb-8 shadow-lg"
              >
                <CheckCircle2 className="w-10 h-10 text-green-600" />
              </motion.div>
              <h3 className="text-2xl font-light text-[#212121] mb-4">
                Inscrição Recebida
              </h3>
              <div className="w-16 h-px bg-gradient-to-r from-transparent via-green-300 to-transparent mx-auto mb-6" />
              <p className="text-gray-600 font-light text-lg max-w-md mx-auto">
                Sua solicitação de ingresso foi registrada com sucesso. 
                Entraremos em contato através do e-mail informado.
              </p>
            </motion.div>
          )}
        </motion.div>
      </div>
    </section>
  );
}