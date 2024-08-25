import Image from "next/image";

export default function Home() {
  return (
    <main className="mx-auto flex flex-col-reverse lg:flex-row items-center mb-8 lg:mb-0">            
        <div className="lg:w-1/2 text-center lg:text-left">
            <h1 className="text-4xl lg:text-7xl font-bold mb-4">Otimize suas vendas</h1>
            <h2 className="text-xl lg:text-2xl text-gray-600 mb-8">Venda todos os tipos de plantas e acessórios para jardinagem.</h2>
            <a  target="_blank" className="inline-flex items-center bg-green-500 text-white font-semibold mb-8 lg:mb-0 py-2 px-4 rounded-lg hover:bg-green-600 transition duration-300"
            href="https://wa.me/5521994223589?text=Ol%C3%A1,%20gostaria%20de%20agendar%20uma%20demonstra%C3%A7%C3%A3o%20e%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20Kaimara.">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white" className="w-6 h-6 mr-2">
                    <path d="M587.69-243.23q-37.66 0-63.77-26.11-26.11-26.11-26.11-63.77 0-37.67 26.11-63.78T587.69-423q37.67 0 63.78 26.11t26.11 63.78q0 37.66-26.11 63.77-26.11 26.11-63.78 26.11ZM215.45-108.08q-28.35 0-48.26-19.91-19.92-19.92-19.92-48.27v-529.1q0-28.35 19.92-48.26 19.91-19.92 48.35-19.92h59.42v-84.61h57.5v84.61h296.62v-84.61h55.96v84.61h59.42q28.44 0 48.35 19.92 19.92 19.91 19.92 48.26v529.1q0 28.35-19.92 48.27-19.91 19.91-48.26 19.91h-529.1Zm.09-55.96h528.92q4.62 0 8.46-3.84 3.85-3.85 3.85-8.47v-369.73H203.23v369.73q0 4.62 3.85 8.47 3.84 3.84 8.46 3.84Zm-12.31-438h553.54v-103.23q0-4.61-3.85-8.46-3.84-3.85-8.46-3.85H215.54q-4.62 0-8.46 3.85-3.85 3.85-3.85 8.46v103.23Zm0 0V-717.58v115.54Z"/>
                </svg>              
                Agendar demonstração
            </a>
        </div>

        <div className="lg:w-1/2">
            <Image
              src="/image.webp"
              alt="Imagem Descritiva"
              className="w-full h-auto mb-6 lg:mb-0 rounded-lg shadow-lg"
              width={1792}
              height={1024}
              priority
            />
        </div>
    </main>
  );
}
