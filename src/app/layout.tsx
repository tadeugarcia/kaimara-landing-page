import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "./globals.css";
import Header from './components/header';
import Footer from './components/footer';

const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "Kaimara - Venda todos os tipos de plantas e acessórios para jardinagem",
  description: "Crie sua loja com nosso sistema de ecommerce, e anuncie todos os tipos de plantas: aquáticas, arbustos, árvores, bromélias, cactos, flores, folhagens, forrações, frutíferas, grãos, hortaliças, orquídeas, palmeiras, samambaias, suculentas, trepadeiras.",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="pt-BR">
      <Header />
      <body className="min-h-screen max-w-7xl m-8 lg:m-auto lg:grid bg-teal-100 text-teal-950">{children}</body>
      <Footer />
    </html>
  );
}
