import React from 'react'
import Graos from '../../imgs/graos.png'
import bagCoffee from '../../imgs/bagCoffee.png'
import Sachet from '../../imgs/sache.png'
import Herbs from '../../imgs/ervas.png'

const RowIcons = ()=> {
    return (
        <div className="row">
        <span className="icon">
          <img src={Graos} alt=""></img>
          <h3>Grãos</h3>
        </span>
        <span className="icon">
          <img src={bagCoffee} alt=""></img>
          <h3>Processados</h3>
        </span>
        <span className="icon">
          <img src={Herbs} alt=""></img>
          <h3>Ervas</h3>
        </span>
        <span className="icon">
          <img src={Sachet} alt=""></img>
          <h3>Sachês</h3>
        </span>
        </div>
    )
}

export {RowIcons}
