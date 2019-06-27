<?php


class PluginNotify_HookMenuSettings extends Hook {
    
    /**
     * Регистрируем хуки
     */
    public function RegisterHook() {
//        $this->AddHook('menu_before_prepare', 'Menu', null, 1);
    }

    public function Menu($aParams) { 
        
        if($aParams['menu']->getName() != 'settings'){
            return false;
        }
        
        if(!$oUser = $this->User_GetUserByLogin(Router::GetActionEvent())){
            return false;
        }
        
        if(!$oUserCurrent = $this->User_GetUserCurrent()){
            return false;
        }
        
        if($oUserCurrent->getId() != $oUser->getId()){
            return false;
        }
        
        $aParams['activeItem'] = $aParams['menu']->getActiveItem();
        
        $aParams['menu']->appendChild(Engine::GetEntity("ModuleMenu_EntityItem", [
            'name' => 'subscribe',
            'title' => 'plugin.subscribe.menu_profile.text',
            'url' => 'subscribe/' . $oUser->getLogin(),
            'count' => $this->PluginSubscribe_Subscribe_GetCountFromSubscribeByFilter([
                'user_id' => $oUser->getId()
            ])
        ]));
        
        
    }
}