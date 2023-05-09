import { ActivityIndicator, Button, Linking, StyleSheet } from "react-native";
import { Text, View } from "react-native";
import MapView from "react-native-maps";
import { Marker } from 'react-native-maps';
import UserLocation from "./UserLocation";
import { useState } from "react";
import ReportPharmacy from "./ReportPharmacy";
import { EvilIcons } from '@expo/vector-icons';
import { Feather } from '@expo/vector-icons';



const calculateDistance = (lat1, lon1, lat2, lon2) => {
  const R = 6371; // Earth's radius in kilometers
  const dLat = toRadians(lat2 - lat1);
  const dLon = toRadians(lon2 - lon1);
  const a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
    Math.sin(dLon / 2) * Math.sin(dLon / 2);
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  const distance = R * c;
  return distance.toFixed(2);
};
const toRadians = (degrees) => {
  return degrees * Math.PI / 180;
};









const PharmacyMap = ({ route, navigation }) => {
  const { name, description, latitude, longitude, phone1, address, id, ville } = route.params;
  const pharmacyRegion = {
    latitude: parseFloat(latitude),
    longitude: parseFloat(longitude),
    latitudeDelta: 0.04,
    longitudeDelta: 0.05,
  };
  const userLoc = UserLocation()
  const [loading, setLoading] = useState(false);

  const handleSaveIpAddress = async () => {
    await saveIpAddress();
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

      <View style={{ margin: 10 }}>
        <Text style={styles.pharmacyName}> {name} <Text style={styles.city} >{ville}</Text></Text>

        <Text style={styles.pharmacyWebsite}>
          <Text style={styles.mainTitle}><EvilIcons name="location" size={20} color="black" />Address </Text>: {address}
        </Text>
        <Text style={styles.pharmacyDescription}><Text style={styles.mainTitle}>
          Description</Text>: {description}</Text>
        <Text>
          {userLoc ? "Distance : " + calculateDistance(userLoc.latitude, userLoc.longitude, latitude, longitude) + " KM" : <ActivityIndicator size="small" color="#03C988" />
          }
        </Text>
        <View style={styles.buttonSection}>
          <ReportPharmacy id={id} />
          <View style={styles.callBtn}>
            <Feather name="phone-call" size={19} color="white" style={styles.iconCall} />
            <Button title="Call" color={"red"}  onPress={() => {
              Linking.openURL(`tel:${phone1}`)
            }} />
          </View>
        </View>
      </View>


    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff"
  },

  map: {
    height: "50%",
    width: "100%",

  },
  callBtn:{
    flex:1,
    backgroundColor:"red",
    flexDirection:"row",
    alignItems:"center",
    borderRadius:4
  },
  iconCall:{
    padding:2,
  },
  buttonSection: {
    marginVertical: 10,
    flexDirection: "row",
    justifyContent: "space-between"
  },
  pharmacyDescription: {

  }
  , pharmacyName: {
    fontSize: 22,
    borderBottomColor: "green",
    borderBottomWidth: 2,
    paddingBottom: 15,
    margin: 6
  },
  mainTitle: {
    fontSize: 15,
    color: "#03C988"
  },
  pharmacyWebsite: {
    color: "blue"
  },
  city: {
    color: "#03C988",
    fontSize: 15
  }

})
export default PharmacyMap;