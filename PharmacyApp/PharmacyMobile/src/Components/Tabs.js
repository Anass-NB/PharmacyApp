import { createNativeStackNavigator } from '@react-navigation/native-stack';
import PharmarcyList from '../Screens/PharmacyList';
import PharmacyMap from './PharmacyMap';
const Tabs = () => {
  
  const Stack = createNativeStackNavigator();
  return (
    <Stack.Navigator>
      <Stack.Screen
        options={
          {
            title: "La Liste des pharmacies",
            headerTintColor: '#fff',
            headerTitleStyle: { fontWeight: 'bold', },
            headerStyle: { backgroundColor: '#03C988', }
          }
        }
        name="Home" component={PharmarcyList} />
      <Stack.Screen
        options={
          {
            title: " pharmacie en Map",
            headerTintColor: '#fff',
            headerTitleStyle: { fontWeight: 'bold', },
            headerStyle: { backgroundColor: '#03C988', }
          }
        }
        name="Map" component={PharmacyMap} />
    </Stack.Navigator>
  );
}

export default Tabs;