import { useEffect, useState } from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { StatusBar } from 'expo-status-bar';
import { ActivityIndicator, FlatList, StyleSheet, Text, View } from 'react-native';
import PharmacyMap from './src/Components/PharmacyMap';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import PharmarcyList from './src/Screens/PharmacyList';
import * as Location from 'expo-location';
import Tabs from './src/Components/Tabs';



const Stack = createNativeStackNavigator();
export default function App() {
  const [loading, setLoding] = useState(false)
  const [location, setlocation] = useState(null)
  const [error, setError] = useState(null)

  if (loading) {
    return (
      <View style={styles.container}>
        <ActivityIndicator size={"large"} color={"#03C988"} />
      </View>
    )
  }
  //GET THE USER LOCATION
  useEffect(() => {
    (async () => {
      let { status } = await Location.requestForegroundPermissionsAsync()
      if (status !== "granted") {
        setError("Permission to access locations was denied")
        return;
      }
      let location = await Location.getCurrentPositionAsync({});
      setlocation(location)
    })();
  }, [])

  if (location) {
    console.log(location);
  }

  return (
    <NavigationContainer>
      <Tabs />
    </NavigationContainer>





  );
}

const styles = StyleSheet.create({
  container: {
    justifyContent: "center",
    flex: 1
  }
});
