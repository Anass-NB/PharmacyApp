
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { Entypo } from '@expo/vector-icons';
import PharmarcyList from '../Screens/PharmacyList';
import { Text, View } from 'react-native';
import PharmacyMap from './PharmacyMap';
import Test from './Test';

const Tab = createBottomTabNavigator()



const Tabs = () => {
  return ( 
    <Tab.Navigator
    screenOptions={{
      tabBarActiveTintColor: "#fff",
      tabBarInactiveTintColor: "#000",
      tabBarStyle: {
        backgroundColor: '#03C988'
      },
      headerStyle: {
        backgroundColor: '#03C988'
      },
      headerTitleStyle: {
        fontSize: 20,
        color: 'black',
      }
    }}
    
  >
    <Tab.Screen name="Liste des pharmacies" component={PharmarcyList}
      options={{
        tabBarLabel: 'List',
        tabBarIcon: ({focused}) => (
          <Entypo name="list" size={29}  color={focused ? '#fff' : '#555'} />),
      }}
    />
    <Tab.Screen  name="Map" component={PharmacyMap} 
      options={{
        tabBarLabel: 'Map',
        tabBarIcon: ({ focused }) => (
          <Entypo name="map" size={24}  color={focused ? '#fff' : '#555'} />
        ),
      }}
     />
     {/* <Tab.Screen     name="Test" component={Test}  /> */}
  </Tab.Navigator>
   );
}
 
export default Tabs;