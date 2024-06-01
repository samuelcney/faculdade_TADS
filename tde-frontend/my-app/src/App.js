import './App.css';
import Logo from './imgs/logo.png'
import { RowIcons } from './components/products/index';
import Cart from './imgs/cart.png'
import { SocialMedias } from './components/social/index'

// 1c7c54-73e2a7-def4c6-1b512d-b1cf5f - cores

function App() {
  return (
    <div className="App">
        <main>
            <div className="content one">
              <div className="card slideToRight">
                <h1 className="title"><i>"O sabor da natureza em sua xícara."</i><br/></h1>
                <h2 className="subtitle">Não há nada melhor do que tomar aquele chá ou café com sabor e qualidade, né?</h2>
                <p className="text">A CoffeeTea tem como responsabilidade, levar para todo o Brasil e exterior, os grãos mais bem selecionados e de alta qualidade para seu café e também as mais finas ervas para o seu chá! Tá esperando o que para pedir o seu? </p>
              </div>
              <div className="card">
                <img src={Logo} alt="" className="logo"/>
              </div>
            </div>

            <div className="content two">
              <div className="card space">
                  <h1 className='secondTitle'>Na CoffeeTea priorizamos à qualidade e excelência de nossos produtos.</h1>
                  <p>A qualidade de nossos produtos é pensada no melhor para você. Temos uma grande variedade de produtos em:</p>
                  <RowIcons/>
              </div>
            </div>
            <div className="content three">
              <div className='newCard'>
                <h1 className='secondTitle'>Faça o seu pedido agora e receba um brinde especial!</h1>
                <a href='https://youtu.be/dQw4w9WgXcQ?si=qKLrbdHHna-L9tYe'>Comprar <img src={Cart} alt=''/></a>
              </div>
            </div>
            <div className='content email'>
              <div className='row'>
                <div><h4>
                  Possui algum dúvida?
                </h4>
                <p>caso tenha algum dúvida,<br/> nos mande um email <br/>e iremos te ajudar!</p></div>
                <input/> 
              <button className='emailButton'>Send</button>
              </div>
            </div>
            <footer>
              <SocialMedias/>
              <h3>Siga nossas redes sociais!</h3>
              <h4>@Direitos Reservados</h4>
            </footer>
            
        </main>
    </div>
  );
}

export default App;
