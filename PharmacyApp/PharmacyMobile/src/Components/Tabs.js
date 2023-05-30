import React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import PharmarcyList from '../Screens/PharmacyList';
import PharmacyMap from './PharmacyMap';
import i18n from './i18n';
const Tabs = () => {

  const Stack = createNativeStackNavigator();
  return (
    <Stack.Navigator>
      <Stack.Screen
        options={({ navigation }) =>
        ({
          title: i18n.t("title"),
          headerTintColor: '#fff',
          headerTitleStyle: { fontWeight: 'bold', },
          headerStyle: { backgroundColor: '#03C988', },

        })
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