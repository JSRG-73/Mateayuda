#Action, sirve para realizar acciones complementarias, disparcher devuelve
#el resultado al bot

from typing import Any, Text, Dict, List
from rasa_sdk import Action, Tracker
from rasa_sdk.executor import CollectingDispatcher
class ActionHelloWorld(Action):
     #Nombre de la accion a la que la clase responde
     def name(self) -> Text:
         return "action_calculadora"

     def run(self, dispatcher: CollectingDispatcher,
             tracker: Tracker,
             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        #retorna el video educativo
         dispatcher.utter_message(attachment={
            "type": "video",
            "autoplay": "true",
            "payload": {
                "title": "Operaciones básicas",
                "src": "https://www.youtube.com/embed/Tk30WZJSIRw"

                
            }
        })

         return []
