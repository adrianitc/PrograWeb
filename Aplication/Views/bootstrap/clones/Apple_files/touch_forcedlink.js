(function(){if(s&&Event&&AC&&typeof AC.onDOMReady==="function"&&Event.Listener&&typeof Event.Listener.listenForEvent==="function"&&typeof AC.ViewMaster==="object"&&typeof s==="object"){AC.onDOMReady(function(){Event.Listener.listenForEvent(AC.ViewMaster,"ViewMasterWillShowNotification",false,function(b){s.useForcedLinkTracking=false
});Event.Listener.listenForEvent(AC.ViewMaster,"ViewMasterDidShowNotification",false,function(b){s.useForcedLinkTracking=true
})})}})();