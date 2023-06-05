import { useEffect, useState } from "react";
import { ActivityIndicator, FlatList, StyleSheet, Text, TextInput, TouchableOpacity, Image,Button, View, Modal, Pressable } from "react-native";
import Item from "../Components/Item";

import UserLocation from "../Components/UserLocation";
import { IP_ADDRESS } from "@env";
import { en, ar, fr } from "./../../localizations"
import * as Localization from 'expo-localization';
import i18n from 'i18n-js';

const PharmarcyList = (props) => {
  const { navigation } = props
  const [pharmacies, setPharmacies] = useState(null);
  const [searchPharmacies, setSearchPharmacies] = useState(null);
  const [loading, setLoading] = useState(true)
  const [searchText, setSearchText] = useState("")
  const { location, granted } = UserLocation()
  let [locale, setLocale] = useState(Localization.locale);
  i18n.fallbacks = true;
  i18n.translations = { en, ar, fr };
  i18n.locale = locale;

  const [modalVisible, setModalVisible] = useState(false);
  const languageOptions = [
    { id: 'en', label: 'English', flag: require('./../../assets/uk-flag.png') },
    { id: 'ar', label: 'Arabic', flag: require('./../../assets/ma-flag.png') },
    { id: 'fr', label: 'French', flag: require('./../../assets/france-flag.png') },
  ];

  const handleLanguageSelection = (language) => {
    setModalVisible(false);
    setLocale(language);
  };




  const handleSearch = (query) => {
    setSearchText(query)
    const formattedText = query.toLowerCase()
    if (!formattedText) {
      setSearchPharmacies(pharmacies)
    } else {
      const filteredData = pharmacies.filter((pharmacy) =>
        pharmacy.name.toLowerCase().includes(searchText.toLowerCase())
      );
      setSearchPharmacies(filteredData);
    }
    console.log(query);
  }


  const url = 'http://192.168.8.124:8000/api/pharmacies?page=1';


  const sendRequest = async (long, lat) => {
    const endPoint = `https://${IP_ADDRESS}/api/pharmacies`;
    try {
      console.log(endPoint);
      await fetch(endPoint, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ longitude: long, latitude: lat })
      })
        .then(response => {
          if (response.ok) {
            response.json().then(data => {
              console.log(data);
              setPharmacies(data.pharmacies)
              setSearchPharmacies(data.pharmacies)
              setLoading(false)
            })
          }

        })
    }
    catch (error) {
      console.error(error);
    }
  }
  useEffect(() => {
    if (location) {
      sendRequest(location.longitude, location.latitude);
    }
  }, [location]);


  if (!location) {
    return (
      <View style={{ flex: 1, justifyContent: "center", alignItems: "center",textAlign:"center"}}>
        <Text>Location access denied. Please enable location services in your device settings...</Text>

      </View>

    )
  }

  return (
    <View style={styles.container}>
      {loading ?
        <ActivityIndicator size={"large"} color={"#03C988"} />
        :
        (<View style={styles.ListContent} >
          <View >
            <View>
              <TextInput
                style={styles.textInput}
                placeholder="Search"
                clearButtonMode="always"
                autoCapitalize="none"
                autoCorrect={false}
                onChangeText={(query) => handleSearch(query)}
              />
              <Pressable
                style={[styles.button, styles.buttonOpen]}
                onPress={() => setModalVisible(true)}>
                <Text style={styles.textStyle}>{i18n.t("language")}</Text>
                <Image source=
                  {locale == "en" ?
                    require('./../../assets/uk-flag.png')
                    : locale == "ar" ? require('./../../assets/ma-flag.png')
                      : locale == "fr" ? require('./../../assets/france-flag.png')
                        : undefined} />
              </Pressable>
            </View>
            <Text style={styles.mainTitle}>{i18n.t('title')}</Text>


            <View style={styles.centeredView}>
              <Modal
                animationType="slide"
                transparent={true}
                visible={modalVisible}
                onRequestClose={() => {
                  Alert.alert('Modal has been closed.');
                  setModalVisible(!modalVisible);
                }}>
                <View style={styles.centeredView}>
                  <View style={styles.modalView}>
                    <Text style={styles.modalText}>Choose a language:</Text>
                    {languageOptions.map((option) => (
                      <TouchableOpacity
                        key={option.id}
                        style={styles.languageOption}
                        onPress={() => handleLanguageSelection(option.id)}
                      >
                        <Image source={option.flag} style={styles.flagImage} />
                        <Text style={styles.languageLabel}>{option.label}</Text>
                      </TouchableOpacity>
                    ))}
                  </View>

                </View>
              </Modal>
            </View>


          </View>
          <FlatList
            data={searchPharmacies}

            initialNumToRender={10}
            maxToRenderPerBatch={10} // render 20 items per batch when scrolling
            windowSize={5} // keep 10 items in memory at a time
            renderItem={({ item }) =>
              <TouchableOpacity onPress={() => navigation.navigate("Map", item)}>
                <Item item={item} />
              </TouchableOpacity>
            }
            keyExtractor={item => item.id.toString()}
            ListEmptyComponent={<Text>No results found</Text>}
            contentContainerStyle={{ flexGrow: 1 }} // add this to make the FlatList fill the available space
          />
        </View>)
      }

    </View>
  );
}
const styles = StyleSheet.create({
  container: {
    // backgroundColor: "#03C988",
    justifyContent: "center",
    flex: 1
  },
  mainTitle: {
    marginHorizontal: 10,
    marginVertical: 10,
    color: "black",
    fontFamily: 'sans-serif-thin',
    fontWeight: 'bold',
    "fontSize": 20,
    textTransform: "uppercase",
    "letterSpacing": 0.15,
    "lineHeight": 24,
    borderBottomColor: "#03C988",
    borderBottomWidth: 1,
    alignSelf: 'flex-start',
    paddingBottom: 10,
    borderRadius: 4,
  },
  textInput: {

    borderColor: "#03C988",
    borderWidth: 2,
    borderRadius: 8,
    paddingHorizontal: 20,
    paddingVertical: 10,
    marginHorizontal: 10,
    marginVertical: 10
  },
  ListContent: {
    // marginTop: StatusBar.currentHeight || 0,
    flex: 1
  },
  centeredView: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    marginTop: 22,
  },
  modalView: {
    margin: 20,
    backgroundColor: 'white',
    borderRadius: 20,
    padding: 35,
    alignItems: 'center',
    shadowColor: '#000',
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.25,
    shadowRadius: 4,
    elevation: 5,
  },
  button: {
    borderRadius: 4,
    padding: 10,
    elevation: 2,
    flexDirection: "row",
    justifyContent: "center",
    alignItems: "center"
  },
  buttonOpen: {

  },
  buttonClose: {
    backgroundColor: '#2196F3',
  },
  textStyle: {
    color: 'black',
    marginHorizontal : 6,
    fontWeight: 'bold',
    textAlign: 'center',
  },
  modalText: {
    marginBottom: 15,
    textAlign: 'center',
  },

})
export default PharmarcyList;