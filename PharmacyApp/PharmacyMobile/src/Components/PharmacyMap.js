import { StyleSheet } from "react-native";
import { Text, View } from "react-native";
import MapView from "react-native-maps";
import { Marker } from 'react-native-maps';



const PharmacyMap = ({route,navigation}) => {
  const { name,description,latitude,longtiude } = route.params;
  const pharmacyRegion = {
    latitude: latitude,
    longitude: longtiude,
    latitudeDelta: 0.01,
    longitudeDelta: 0.01,
  };
  return ( 
    <View style={styles.container}>
     <MapView 
    style={styles.map} 
    initialRegion={pharmacyRegion}
    >

    <Marker 
    coordinate={pharmacyRegion}
    pinColor="green"
    title={name}
    description={description}
    image={require("../../assets/pha-marker.png")} 
    />
    </MapView>
</View>
   );
}
 
const styles = StyleSheet.create({
  container:{
    flex:1,
  },
  map:{
    height: "100%",
    width: "100%"
  }

})
export default PharmacyMap;