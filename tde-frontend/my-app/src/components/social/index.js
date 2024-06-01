import React from 'react'
import Twitter from '../../imgs/twitter.png'
import Insta from '../../imgs/instagram.png'
import Whatsapp from '../../imgs/whatsapp.png'
import Tiktok from '../../imgs/tiktok.png'

const SocialMedias = ()=> {
    return (
        <div className='row'>
            <span>
                <img src={Whatsapp} alt='Whatsapp' className="socialIcon"/>
            </span>
            <span>
                <img src={Insta} alt='Instagram' className="socialIcon"/>
            </span>
            <span>
                <img src={Twitter} alt='Twitter' className="socialIcon"/>
            </span>
            <span>
                <img src={Tiktok} alt='Tiktok' className="socialIcon"/>
            </span>
        </div>
    )
}

export {SocialMedias}
