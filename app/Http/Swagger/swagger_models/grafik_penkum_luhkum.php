<?php

/**
  * @OA\Get(
  *      path="/v1/entities/grafik-penkum-luhkum",
  *      operationId="browseD.IN.9-DataGrafikKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"grafik-penkum-luhkum"},
  *      summary="Browse D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Returns list of D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/grafik-penkum-luhkum/read?slug=grafik-penkum-luhkum&id={id}",
  *      operationId="readD.IN.9-DataGrafikKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"grafik-penkum-luhkum"},
  *      summary="Get D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum based on id",
  *      description="Returns D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/grafik-penkum-luhkum/add",
  *      operationId="addD.IN.9-DataGrafikKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"grafik-penkum-luhkum"},
  *      summary="Insert new D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Insert new D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"foto":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/grafik-penkum-luhkum/edit",
  *      operationId="editD.IN.9-DataGrafikKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"grafik-penkum-luhkum"},
  *      summary="Edit an existing D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Edit an existing D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"foto":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/grafik-penkum-luhkum/delete",
  *      operationId="deleteD.IN.9-DataGrafikKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"grafik-penkum-luhkum"},
  *      summary="Delete one record of D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Delete one record of D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="grafik-penkum-luhkum",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/grafik-penkum-luhkum/delete-multiple",
  *      operationId="deleteMultipleD.IN.9-DataGrafikKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"grafik-penkum-luhkum"},
  *      summary="Delete multiple record of D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Delete multiple record of D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="grafik-penkum-luhkum",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/grafik-penkum-luhkum/sort",
  *      operationId="sortD.IN.9-DataGrafikKegiatanPeneranganHukumdanPenyuluhanHukum",
  *      tags={"grafik-penkum-luhkum"},
  *      summary="Sort existing D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      description="Sort existing D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="grafik-penkum-luhkum",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "foto":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "foto":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="foto"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */