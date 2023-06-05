import React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import PharmarcyList from '../Screens/PharmacyList';
import PharmacyMap from './PharmacyMap';
import i18n from './i18n';

import { Feather } from '@expo/vector-icons';
import { Text, TouchableOpacity } from 'react-native';
import SearchPharmacy from './SearchPharmacy';
const Tabs = () => {

  const Stack = createNativeStackNavigator();





  return (
    <Stack.Navigator>
      <Stack.Screen
        name="Home"
        component={PharmarcyList}
        options={({ navigation }) => ({
          title: i18n.t("title"),
          headerTintColor: '#fff',
          headerTitleStyle: { fontWeight: 'bold' },
          headerStyle: { backgroundColor: '#03C988' },
          headerRight: () => (
            <TouchableOpacity onPress={() => navigation.navigate('SearchStack')}>
              {/* <Text style={{ color: '#fff', marginRight: 10 }}>{ i18n.t("searchPharmacy")}</Text> */}
              <Feather name="search" size={24} color="white" />
            </TouchableOpacity>
          ),
        })}
      />
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
      <Stack.Screen
        name="SearchStack"
        
        component={SearchPharmacy}
        options={
          {
            headerStyle: { backgroundColor: '#03C988' },
            headerTintColor: '#fff',
            title:  i18n.t("searchPharmacy"),
          }
        }
      />


    </Stack.Navigator>
  );
}

export default Tabs;