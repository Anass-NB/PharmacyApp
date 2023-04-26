import { NavigationContainer } from '@react-navigation/native';
import { StatusBar } from 'expo-status-bar';
import { FlatList, StyleSheet, Text, View } from 'react-native';
import { Tabs } from './src/Components/Tabs';
import PharmacyMap from './src/Components/PharmacyMap';
import Test from './src/Components/Test';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Test2 from './src/Components/Test2';
import PharmarcyList from './src/Screens/PharmacyList';


const Stack = createNativeStackNavigator();
export default function App() {


  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name="Home" component={PharmarcyList} />
        <Stack.Screen name="Map" component={PharmacyMap} />
      </Stack.Navigator>
    </NavigationContainer>

    // <NavigationContainer>
    //   <Tabs />
    // </NavigationContainer>
    // <View>
    //   <Test />
    // </View>



  );
}

const styles = StyleSheet.create({
  flex: 1,
  marginTop: StatusBar.currentHeight || 0,
});
